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
        // $joinedData = DB::table('Allocatetoprogs')
        //     ->join('allocateitemtoprogs', 'Allocatetoprogs.id', '=', 'allocateitemtoprogs.allocateIDprogs')
        //     ->select('allocateitemtoprogs.allocateIDprogs', 'allocateitemtoprogs.alloprog_item')
        //     ->where('Allocatetoprogs.id', $id)
        //     ->first();

        $joinedData = DB::table('allocateitemtoprogs')
            ->join('allocatetoprogs', 'allocateitemtoprogs.allocateIDprogs', '=', 'allocatetoprogs.id')
            ->select('allocateitemtoprogs.alloprog_quan', 'allocateitemtoprogs.alloprog_unit', 'allocateitemtoprogs.alloprog_item', 'allocateitemtoprogs.alloprog_descript', 'allocateitemtoprogs.alloprog_price', 'allocateitemtoprogs.alloprog_pricetotal')
            ->where('allocateitemtoprogs.allocateIDprogs', $id)->first();
        return view('Health_Department.hdAllocationView', ['user' => $user, 'allotoprogview' => $allotoprogview, 'joinedData' => $joinedData]);
    }

    public function hdAllocationEdit($id)
    {
        $user = Auth::user();
        $allotoprogedit = Allocatetoprogs::findOrFail($id);
        return view('Health_Department.hdAllocationEdit', ['user' => $user, 'allotoprogedit' => $allotoprogedit]);
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
            'alloprog_quan' => 'required',
            'alloprog_unit' => 'required',
            'alloprog_item' => 'required',
            'alloprog_descript' => 'nullable|required',
            'alloprog_price' => 'required',
            'alloprog_pricetotal' => 'required',
        ]);

        $allocateitemtoprogsData = $request->all();
        $allocateitemtoprogsData['allocateIDprogs'] = $allocatetoprogs->id;


        Allocateitemtoprogs::create($allocateitemtoprogsData);

        return view('Health_Department.hdAllocationProcess', ['user' => $user, 'allocateitemtoprogsData' => $allocateitemtoprogsData]);
    }

    public function hdAllocationProgUpdate(Request $request, $id)
    {
        // Validate the request data
        $allocation = Allocatetoprogs::findOrFail($id);
        $allocation->update($request->all());

        // Redirect back with success message
        return back()->with('success', 'Product deleted successfully');
    }


    public function hdAllocationProgDelete($id)
    {
        $allocatetoprogs = Allocatetoprogs::find($id);

        if (!$allocatetoprogs) {
            return back()->with('error', 'Allocatetoprogs not found');
        }

        // Delete Allocatetoprogs record
        $allocatetoprogs->delete();

        // Find and delete related records from Allocateitemtoprogs table
        Allocateitemtoprogs::where('allocateIDprogs', $allocatetoprogs->id)->delete();
        return back()->with('success', 'Product deleted successfully');
    }
}
