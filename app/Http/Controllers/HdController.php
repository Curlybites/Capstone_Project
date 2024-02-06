<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Allocatetoprogs;

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
        return view('Health_Department.hdAllocation', ['user' => $user]);
    }

    public function hdAllocationProcess()
    {
        $user = Auth::user();
        return view('Health_Department.hdAllocationProcess', ['user' => $user]);
    }

    public function hdAllocationtoProg(Request $request)
    {
        Validator::make($request->all(), [
            'program' => 'required',
            'poNum' => 'required',
            'itemType' => 'required',
            'items_total' => 'nullable|required',
            'notes' => 'required',
            'item_status' => 'required',
        ]);

        Allocatetoprogs::create($request->all());
        return back()->with('success', 'Product Success');
    }

    public function hdAllocationView()
    {
        $user = Auth::user();
        return view('Health_Department.hdAllocationView', ['user' => $user]);
    }

    public function hdAllocationEdit()
    {
        $user = Auth::user();
        return view('Health_Department.hdAllocationEdit', ['user' => $user]);
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

    // 'program',
    // 'POnum',
    // 'itemType',
    // 'notes',
    // 'status',

    // allocationtoprogs
}
