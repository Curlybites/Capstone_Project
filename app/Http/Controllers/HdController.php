<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Allocatetoprogs;
use App\Models\Allocateitemtoprogs;

class HdController extends Controller
{
    public function hdInventory()
    {
        $user = Auth::user();
        return view('Health_Department.hdInventory', ['user' => $user]);
    }

    public function hdPurchaseOrderList()
    {
        $user = Auth::user();
        return view('Health_Department.hdPOList', ['user' => $user]);
    }

    public function hdPurchaseOrderView()
    {
        $user = Auth::user();
        return view('Health_Department.hdPOView', ['user' => $user]);
    }

    public function hdAllocation()
    {
        $user = Auth::user();
        $allotoprog = Allocatetoprogs::all();
        return view('Health_Department.hdAllocation', ['user' => $user, 'allotoprog' => $allotoprog]);
    }

    public function hdAllocationProcess()
    {
        $user = Auth::user();
        return view('Health_Department.hdAllocationProcess', ['user' => $user]);
    }

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


    // POST METHOD FUNCTION

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

        return view('Health_Department.hdAllocationProcess', ['user' => $user]);
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




    public function hdAllocationProgUpdate(Request $request, $id)
    {
        $allocation = Allocatetoprogs::findOrFail($id);
        $allocation->update($request->all());

        $allocationitem = Allocateitemtoprogs::where('allocateIDprogs', $id)->firstOrFail();
        $allocationitem->update($request->all());


        return back()->with('success', 'Records updated successfully');
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
