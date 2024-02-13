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
        $user = Auth::user();
        $ppmp = Ppmpdatas::all();
        return view('Program_Manager.PPMPlist', ['user' => $user, 'ppmp' => $ppmp]);

    }
    public function PPMPcreate()
    {   
        $program = Program::all();
        $user = Auth::user();
        $items = Items::all();
        $ppmp = Ppmpdatas::all();
        return view('Program_Manager.pmPPMPcreate', ['user' => $user, 'ppmp' => $ppmp, 'item'=> $items, 'program'=> $program]);

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
    

    public function PPMPEdit($id)
    {
        $items = Items::all();
        $user = Auth::user();
        $ppmpdatas=Ppmpdatas::findOrfail($id);
        $joinedppmpdata = DB::table('ppmpitemdatas')
        ->join('ppmpdatas', 'ppmpitemdatas.ppmpitemID','=', 'ppmpdatas.id')
        ->select('ppmpitemdatas.quantity','ppmpitemdatas.unit' , 'ppmpitemdatas.itemname' , 'ppmpitemdatas.description' , 'ppmpitemdatas.unitprice' , 'ppmpitemdatas.total' )
        ->where('ppmpitemdatas.ppmpitemID', $id)->first();

        return view('Program_Manager.pmPPMPEdit', ['user' => $user, 'ppmpdatas' => $ppmpdatas, 'joinedppmpdata' => $joinedppmpdata, 'item'=> $items]);
    }

    public function AllocationPrint()
    {
        $user = Auth::user();
        
        return view('Program_Manager.pmAllocationPrint', ['user' => $user]);
    }

    public function storePPMP(Request $request)
    {
     dd($request);
        // $items = Items::all();
        // $user = Auth::user();
        // Validator::make($request->all(), [
        //     'ppmp_code' => 'required',
        //     'year' => 'required',
        //     'department' => 'required',
        //     'programtitle' => 'required',
        //     'projecttitle' => 'required',
        //     'typeofcontract' => 'required',
        //     'accounttitle' => 'required',
        //     'schedule',
        //     'note',
        //     'status' => 'required',
        // ]);
        
        // $ppmptosupplier = Ppmpdatas::create($request->all());

        // Validator::make($request->all(), [
        // 'quantity' => 'required',
        // 'unit' => 'required',
        // 'itemname' => 'required', 
        // 'description' => 'required',
        // 'unitprice' => 'required',
        // 'total' => 'required',
        // ]);

        // $ppmptosuppdata = $request->all();
        // $ppmptosuppdata['ppmpitemID'] = $ppmptosupplier->id;

        // Ppmpitemdatas::create($ppmptosuppdata);

        // return view('Program_Manager.pmPPMPcreate', ['user' => $user, 'ppmptosuppdata' => $ppmptosuppdata, 'item'=> $items, ]);
    }

    public function editPPMP(Request $request, $id)
    {
        $PPMP = Ppmpdatas::findOrFail($id);
        $PPMP->update($request->all());
        

        $ppmpitems=Ppmpitemdatas::findOrfail($id);
        $ppmpitems->update($request->all());

        return redirect('/Program_Manager/PPMPlist')->with('success', 'PPMP updated successfully.');
    }

    public function PPMPView($id)
    {
        $user = Auth::user();
        $ppmpdatas=Ppmpdatas::findOrfail($id);
        $joinedppmpdata = DB::table('ppmpitemdatas')
        ->join('ppmpdatas', 'ppmpitemdatas.ppmpitemID','=', 'ppmpdatas.id')
        ->select('ppmpitemdatas.quantity','ppmpitemdatas.unit' , 'ppmpitemdatas.itemname' , 'ppmpitemdatas.description' , 'ppmpitemdatas.unitprice' , 'ppmpitemdatas.total' )
        ->where('ppmpitemdatas.ppmpitemID', $id)->first();

        return view('Program_Manager.pmPPMPView', ['user' => $user, 'ppmpdatas' => $ppmpdatas, 'joinedppmpdata' => $joinedppmpdata]);
    }


        public function deletePPMP($id)
        {
            $user = Auth::user();
            $ppmp = Ppmpdatas::find($id);
            $ppmp->delete();

            return back()->with('sucess', 'PPMP is deleted sucessfully');

        }


      

}