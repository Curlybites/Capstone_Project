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
use App\Models\Allocatetoprogs;
use App\Models\Allocateitemtoprogs;
use App\Models\Program_Manager_Inventory;

class ProgramManagerController extends Controller
{

    public function Inventorypage()
    {
        $user = Auth::user();
        $hdInventory = Program_Manager_Inventory::all();
        // $getname = DB::table('program_manager_inventory')
        // ->join('items','program_manager_inventory.item_name', '=','items.id')
        // ->select('items.item_name')->where('program_manager_inventory.item_name',);
        
        return view('Program_manager.Inventory', ['user' => $user, 'hdInventory' => $hdInventory]);
    }

    public function Allocationpage()
    {
        $user = Auth::user();
        return view('Program_Manager.pmAllocationlist', ['user' => $user]);
    }

    public function create_allocation(){
        $program = Program::all();
        $user = Auth::user();
        $ppmp = Ppmpdatas::all();
        $hdInventory = Program_Manager_Inventory::all();
        return view('Program_Manager.create_allocation', ['user' => $user, 'ppmp' => $ppmp, 'program' => $program, 'hdInventory' => $hdInventory]);
        // $user = Auth::user();
        // return view('Program_Manager.create_allocation', ['user' => $user]);
    }

    public function PPMPpage()
    {
        $program = Program::all();
        $user = Auth::user();
        $ppmp = Ppmpdatas::orderBy('created_at', 'desc')->get();
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
            'items_total' => 'required',
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
            ->join('items', 'ppmpitemdatas.itemname', '=', 'items.id')
            ->select('ppmpitemdatas.quantity', 'ppmpitemdatas.unit', 'ppmpitemdatas.itemname', 'ppmpitemdatas.description', 'ppmpitemdatas.unitprice', 'ppmpitemdatas.total', 'items.item_name')
            ->where('ppmpitemdatas.ppmpitemID', $id)->get();

        return view('Program_Manager.pmPPMPEdit', ['user' => $user, 'ppmpdatas' => $ppmpdatas, 'joinedppmpdata' => $joinedppmpdata, 'item' => $items, 'ppmp' => $ppmp, 'program' => $program]);
    }

    public function PPMPView($id)
    {
        $user = Auth::user();
        $ppmpdatas = Ppmpdatas::findOrfail($id);
        $joinedppmpdata = DB::table('ppmpitemdatas')
            ->join('ppmpdatas', 'ppmpitemdatas.ppmpitemID', '=', 'ppmpdatas.id')
            ->join('items', 'ppmpitemdatas.itemname', '=', 'items.id')
            ->select('ppmpitemdatas.quantity', 'ppmpitemdatas.unit', 'ppmpitemdatas.itemname', 'ppmpitemdatas.description', 'ppmpitemdatas.unitprice', 'ppmpitemdatas.total', 'items.item_name')
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

    public function receive_page()
    {
        $user = Auth::user();
        $allotoprog = Allocatetoprogs::all();
        return view('Program_Manager.receive_list', ['user' => $user, 'allotoprog' => $allotoprog]);
    }

    public function receive_view($id)
    {
        $user = Auth::user();
        $allotoprogview = Allocatetoprogs::findOrFail($id);

        $joinedData = DB::table('allocateitemtoprogs')
            ->join('allocatetoprogs', 'allocateitemtoprogs.allocateIDprogs', '=', 'allocatetoprogs.id')
            ->select('allocateitemtoprogs.alloprog_quan', 'allocateitemtoprogs.alloprog_unit', 'allocateitemtoprogs.alloprog_item', 'allocateitemtoprogs.alloprog_descript', 'allocateitemtoprogs.alloprog_price', 'allocateitemtoprogs.alloprog_pricetotal')
            ->where('allocateitemtoprogs.allocateIDprogs', $id)->get();
        return view('Program_Manager.receive_view', ['user' => $user, 'allotoprogview' => $allotoprogview, 'joinedData' => $joinedData]);
    }

    public function program_receive_items(Request $request, $id){

        $received_po_from_hd = Allocatetoprogs::findOrFail($id);
        $received_item_from_hd = Allocateitemtoprogs::Where('allocateIDprogs',$id)->get();
        foreach ($received_item_from_hd as $received_items ) {
            $receivedOrder = new Program_Manager_Inventory();
            $receivedOrder->po_code = $received_po_from_hd->POnum;
            $receivedOrder->item_quantity =  $received_items->alloprog_quan;
            $receivedOrder->item_unit =  $received_items->alloprog_unit;
            $receivedOrder->item_name =  $received_items->alloprog_item;
            $receivedOrder->program_title = $received_po_from_hd->program;
            $receivedOrder->item_description = $received_items->alloprog_descript;
            $receivedOrder->item_price = $received_items->alloprog_price;
            $receivedOrder->item_total = $received_items->alloprog_pricetotal; 
            $receivedOrder->save();
        }
        
        return redirect('/Program_Manager/Receive_List')->with('success', 'Received successfully.');
    }


}
