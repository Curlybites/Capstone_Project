<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class DistrictController extends Controller
{
    public function profileDistrict()
    {
        $user = Auth::user();
        return view('District.profile.profile', ['user' => $user]);
    }

    public function profileChangeDistrict()
    {
        $user = Auth::user();
        return view('District.profile.change_pass', ['user' => $user]);
    }

    public function inventoryDistrict()
    {
        return view('District.dtInventory');
    }

    public function allocationlistDistrict()
    {
        return view('District.dtAllocationList');
    }

    public function allocationcreateDistrict()
    {
        return view('District.dtAllocationCreate');
    }

    public function districtView()
    {
        return view('District.dtAllocationView');
    }

}
