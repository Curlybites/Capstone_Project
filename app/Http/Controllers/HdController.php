<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Allocatetoprogs;
use App\Models\Allocateitemtoprogs;
use App\Models\HdInventory;
use App\Models\Items;

use App\Models\Program;
use App\Models\Ppmpdatas;
use App\Models\Ppmpitemdatas;


class HdController extends Controller
{
    public function hdInventory()
    {
        $user = Auth::user();
        $hdInventory = HdInventory::all();
        return view('Health_Department.hdInventory', ['user' => $user, 'hdInventory' => $hdInventory]);
    }

    public function hdPurchaseOrderList()
    {
        $program = Program::all();
        $user = Auth::user();
        $ppmp = Ppmpdatas::all();
        return view('Health_Department.hdPOList', ['user' => $user, 'ppmp' => $ppmp, 'program' => $program]);
    }

    public function hdReceive(Request $request, $id)
    {
        $ppmpdata = Ppmpdatas::findOrFail($id);
        $ppmpdataitems = Ppmpitemdatas::where('ppmpitemID', $id)->get(); // Assuming there's a column 'ppmp_id' in Ppmpitemdatas table
        foreach ($ppmpdataitems as $ppmpdataitem) {
            $receivedOrder = new HdInventory();
            $receivedOrder->po_code = $ppmpdata->ppmp_code;
            // $receivedOrder->item_img = $items->item_image;
            $receivedOrder->item_quan = $ppmpdataitem->quantity;
            $receivedOrder->item_unit = $ppmpdataitem->unit;
            $receivedOrder->item_name = $ppmpdataitem->itemname;
            $receivedOrder->program_title = $ppmpdata->programtitle;
            $receivedOrder->item_description = $ppmpdataitem->description;
            $receivedOrder->item_price = $ppmpdataitem->unitprice;
            $receivedOrder->item_total = $ppmpdataitem->total;
            $receivedOrder->save();
        }

        return redirect()->back()->with('success', 'PPMP received successfully.');
    }

    public function hdPurchaseOrderView($id)
    {
        $user = Auth::user();
        $ppmpdatas = Ppmpdatas::findOrfail($id);
        $joinedppmpdata = DB::table('ppmpitemdatas')
            ->join('ppmpdatas', 'ppmpitemdatas.ppmpitemID', '=', 'ppmpdatas.id')
            ->join('items', 'ppmpitemdatas.itemname', '=', 'items.id')
            ->select('ppmpitemdatas.quantity', 'ppmpitemdatas.unit', 'ppmpitemdatas.itemname', 'ppmpitemdatas.description', 'ppmpitemdatas.unitprice', 'ppmpitemdatas.total', 'items.item_name', 'items.item_image')
            ->where('ppmpitemdatas.ppmpitemID', $id)->get();

        return view('Health_Department.hdPOView', ['user' => $user, 'ppmpdatas' => $ppmpdatas, 'joinedppmpdata' => $joinedppmpdata]);
        // $user = Auth::user();
        // return view('Health_Department.hdPOView', ['user' => $user]);
    }

    public function hdAllocationProcess()
    {
        $program = Program::all();
        $user = Auth::user();
        $ppmp = Ppmpdatas::all();
        $hdInventory = HdInventory::all();
        return view('Health_Department.hdAllocationProcess', ['user' => $user, 'ppmp' => $ppmp, 'program' => $program, 'hdInventory' => $hdInventory]);
    }

    public function hdAccount()
    {
        $user = Auth::user();
        return view('Health_Department.hdAccount', ['user' => $user]);
    }

    public function hdAccountChange()
    {
        $user = Auth::user();
        return view('Health_Department.hdAccountChange', ['user' => $user]);
    }

    public function hdAllocation()
    {
        $user = Auth::user();
        $allotoprog = Allocatetoprogs::all();
        return view('Health_Department.hdAllocation', ['user' => $user, 'allotoprog' => $allotoprog]);
    }

    public function hdAllocationtoProg(Request $request)
    {
        $user = Auth::user();
        Validator::make($request->all(), [
            'program' => 'required',
            'poNum' => 'required',
            'itemType' => 'required',
            'items_total' => 'nullable|required',
            'notes' => 'required',
            'item_status' => 'required',
        ]);

        $allocatetoprogs = Allocatetoprogs::create($request->all());

        // Allocation to program Items info
        Validator::make($request->all(), [
            'alloprog.*.alloprog_quan' => 'required',
            'alloprog.*.alloprog_unit' => 'required',
            'alloprog.*.alloprog_item' => 'required',
            'alloprog.*.alloprog_descript' => 'nullable|required',
            'alloprog.*.alloprog_price' => 'required',
            'alloprog.*.alloprog_pricetotal' => 'required',
        ]);
        foreach ($request->alloprog as $key) {
            $key['allocateIDprogs'] = $allocatetoprogs->id;
            Allocateitemtoprogs::create($key);
        }

        return redirect('/Health_Department/Allocation_List')->with('success', 'Allocation successfuly ');

        // return view('Health_Department.hdAllocationProcess', ['user' => $user]);
    }

    // public function hdAllocationProgUpdate(Request $request, $id)
    // {
    //     $allocation = Allocatetoprogs::findOrFail($id);
    //     $allocation->update($request->all());

    //     $allocationitem = Allocateitemtoprogs::where('allocateIDprogs', $id)->firstOrFail();
    //     foreach ($allocationitem as $allocationItem) {
    //         $allocationItem->update($request->all());
    //     }
    //     // $allocationitem->update($request->all());
    //     // Redirect back with success message
    //     return back()->with('success', 'Product deleted successfully');

    //     // where('allocateIDprogs', $id)->
    // }

    public function hdAllocationView($id)
    {
        $user = Auth::user();
        $allotoprogview = Allocatetoprogs::findOrFail($id);

        $joinedData = DB::table('allocateitemtoprogs')
            ->join('allocatetoprogs', 'allocateitemtoprogs.allocateIDprogs', '=', 'allocatetoprogs.id')
            ->select('allocateitemtoprogs.alloprog_quan', 'allocateitemtoprogs.alloprog_unit', 'allocateitemtoprogs.alloprog_item', 'allocateitemtoprogs.alloprog_descript', 'allocateitemtoprogs.alloprog_price', 'allocateitemtoprogs.alloprog_pricetotal')
            ->where('allocateitemtoprogs.allocateIDprogs', $id)->get();
        return view('Health_Department.hdAllocationView', ['user' => $user, 'allotoprogview' => $allotoprogview, 'joinedData' => $joinedData]);
    }

    public function hdAllocationEdit($id)
    {
        $user = Auth::user();
        $allotoprogedit = Allocatetoprogs::findOrFail($id);
        $joinedData = DB::table('allocateitemtoprogs')
            ->join('allocatetoprogs', 'allocateitemtoprogs.allocateIDprogs', '=', 'allocatetoprogs.id')
            ->select('allocateitemtoprogs.alloprog_quan', 'allocateitemtoprogs.alloprog_unit', 'allocateitemtoprogs.alloprog_item', 'allocateitemtoprogs.alloprog_descript', 'allocateitemtoprogs.alloprog_price', 'allocateitemtoprogs.alloprog_pricetotal')
            ->where('allocateitemtoprogs.allocateIDprogs', $id)->get();

        return view('Health_Department.hdAllocationEdit', ['user' => $user, 'allotoprogedit' => $allotoprogedit, 'joinedData' => $joinedData]);
    }

    public function hdAllocationProgUpdate(Request $request, $id)
    {
        $allocation = Allocatetoprogs::findOrFail($id);
        $allocation->update($request->except('_token', '_method', 'alloprog_quan', 'alloprog_unit', 'alloprog_item', 'alloprog_descript', 'alloprog_price', 'alloprog_pricetotal'));

        $allocationitems = Allocateitemtoprogs::where('allocateIDprogs', $id)->get();

        foreach ($allocationitems as $key => $allocationitem) {
            $allocationitem->update([
                'alloprog_quan' => $request->alloprog_quan[$key],
                'alloprog_unit' => $request->alloprog_unit[$key],
                'alloprog_item' => $request->alloprog_item[$key],
                'alloprog_descript' => $request->alloprog_descript[$key],
                'alloprog_price' => $request->alloprog_price[$key],
                'alloprog_pricetotal' => $request->alloprog_pricetotal[$key]
            ]);
        }

        // Add row to sa allocation edit
        $validator = Validator::make($request->all(), [
            'alloprog.*.alloprog_quan' => 'required',
            'alloprog.*.alloprog_unit' => 'required',
            'alloprog.*.alloprog_item' => 'required',
            'alloprog.*.alloprog_descript' => 'nullable|required',
            'alloprog.*.alloprog_price' => 'required',
            'alloprog.*.alloprog_pricetotal' => 'required',
        ]);

        // Check if validation fails
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // Check if $request->alloprog is not null and is an array
        if ($request->has('alloprog') && is_array($request->alloprog)) {
            foreach ($request->alloprog as $key) {
                $key['allocateIDprogs'] = $allocation->id;
                Allocateitemtoprogs::create($key);
            }
        }

        return redirect('/Health_Department/Allocation_List')->with('success', 'Allocation update successfuly ');
    }

    public function hdAllocationProgDelete($id)
    {
        $allocatetoprogs = Allocatetoprogs::find($id);

        if (!$allocatetoprogs) {
            return back()->with('error', 'Allocatetoprogs not found');
        }
        $allocatetoprogs->delete();
        Allocateitemtoprogs::where('allocateIDprogs', $allocatetoprogs->id)->delete();

        return back()->with('success', 'Product deleted successfully');
    }
}
