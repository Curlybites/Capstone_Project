<?php

namespace App\Http\Controllers;

use App\Models\Ppmpdatas;
use App\Models\Ppmpitemdatas;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Items;
use App\Models\Program;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProgramManagerController extends Controller
{

    public function Reportpage()
    {
        $user = Auth::user();
        return view('Program_Manager.Reportlist', ['user' => $user]);
    }

    public function Allocationpage()
    {
        $user = Auth::user();
        return view('Program_Manager.pmAllocationlist', ['user' => $user]);
    }

    public function PPMPpage()
    {
        $program = Program::all();
        $user = Auth::user();
        $ppmp = Ppmpdatas::all();
        return view('Program_Manager.PPMPlist', ['user' => $user, 'ppmp' => $ppmp, 'program' => $program]);
    }
    public function PPMPcreate()
    {
        $program = Program::all();
        $user = Auth::user();
        $items = Items::all();
        $ppmp = Ppmpdatas::all();
        return view('Program_Manager.pmPPMPcreate', ['user' => $user, 'ppmp' => $ppmp, 'item' => $items, 'program' => $program]);
    }

    public function Profilepage()
    {
        $user = Auth::user();
        return view('Program_Manager.Profile', ['user' => $user]);
    }
    public function pmAccountChange()
    {
        $user = Auth::user();
        return view('Program_Manager.pmAccountChange', ['user' => $user]);
    }
    public function pmAllocationView()
    {
        $user = Auth::user();
        return view('Program_Manager.pmAllocationView', ['user' => $user]);
    }
    public function pmAllocationEdit()
    {
        $user = Auth::user();
        return view('Program_Manager.pmAllocationEdit', ['user' => $user]);
    }


    public function AllocationPrint()
    {
        $user = Auth::user();
        return view('Program_Manager.pmAllocationPrint', ['user' => $user]);
    }

    public function storePPMP(Request $request)
    {
        $user = Auth::user();
        $items = Items::all();
        $ppmp = Ppmpdatas::all();
        $program = Program::all();
        $user = Auth::user();
        Validator::make($request->all(), [
            'ppmp_code' => 'required',
            'year' => 'required',
            'department' => 'required',
            'programtitle' => 'required',
            'projecttitle' => 'required',
            'typeofcontract' => 'required',
            'accounttitle' => 'required',
            'schedule',
            'note',
            'status' => 'required',
            'items_total'=> 'required',
        ]);

        $ppmptosupplier = Ppmpdatas::create($request->all());
        
        Validator::make($request->all(), [
            'ppmp.*.quantity' => 'required',
            'ppmp.*.unit' => 'required',
            'ppmp.*.itemname' => 'required',
            'ppmp.*.description' => 'required',
            'ppmp.*.unitprice' => 'required',
            'ppmp.*.total' => 'required',
        ]);

        foreach ($request->ppmp as $item) {
            $item['ppmpitemID'] = $ppmptosupplier->id;
            Ppmpitemdatas::create($item);
        }
        return redirect('/Program_Manager/PPMPlist')->with('success', 'PPMP Created Successfully.');
    }

    public function editPPMP(Request $request, $id)
    {
        $PPMP = Ppmpdatas::findOrFail($id);
        $PPMP->update($request->all());

        $ppmpitems = Ppmpitemdatas::findOrFail($id);
        $ppmpitems->update($request->all());

        return redirect('/Program_Manager/PPMPlist')->with('success', 'PPMP updated successfully.');
    }

    public function PPMPEdit($id)
    {
        $program = Program::all();
        $ppmp = Ppmpdatas::all();
        $items = Items::all();
        $user = Auth::user();
        $ppmpdatas = Ppmpdatas::findOrfail($id);
        $joinedppmpdata = DB::table('ppmpitemdatas')
            ->join('ppmpdatas', 'ppmpitemdatas.ppmpitemID', '=', 'ppmpdatas.id')
            ->join('items','ppmpitemdatas.itemname', '=','items.id')
            ->select('ppmpitemdatas.quantity', 'ppmpitemdatas.unit', 'ppmpitemdatas.itemname', 'ppmpitemdatas.description', 'ppmpitemdatas.unitprice', 'ppmpitemdatas.total','items.item_name')
            ->where('ppmpitemdatas.ppmpitemID', $id)->get();

        return view('Program_Manager.pmPPMPEdit', ['user' => $user, 'ppmpdatas' => $ppmpdatas, 'joinedppmpdata' => $joinedppmpdata, 'item' => $items, 'ppmp' => $ppmp, 'program' => $program]);
    }

    public function PPMPView($id)
    {
        $user = Auth::user();
        $ppmpdatas = Ppmpdatas::findOrfail($id);
        $joinedppmpdata = DB::table('ppmpitemdatas')
            ->join('ppmpdatas', 'ppmpitemdatas.ppmpitemID', '=', 'ppmpdatas.id')
            ->join('items','ppmpitemdatas.itemname', '=','items.id')
            ->select('ppmpitemdatas.quantity', 'ppmpitemdatas.unit', 'ppmpitemdatas.itemname', 'ppmpitemdatas.description', 'ppmpitemdatas.unitprice', 'ppmpitemdatas.total','items.item_name')
            ->where('ppmpitemdatas.ppmpitemID', $id)->get();     

        return view('Program_Manager.pmPPMPView', ['user' => $user, 'ppmpdatas' => $ppmpdatas, 'joinedppmpdata' => $joinedppmpdata]);
    }

    public function deletePPMP($id)
    {
        $ppmp = Ppmpdatas::find($id);
        $ppmp->delete();
        Ppmpitemdatas::where('ppmpitemID', $ppmp->id)->delete();

        return back()->with('success', 'PPMP is deleted sucessfully');
    }
}
