<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function districtListpage()
    {
        return view('Admin.districtList');
    }
    public function barangaylistpage()
    {
        return view('Admin.Barangaylist');
    }
    public function Healthcenterpage()
    {
        return view('Admin.HealthCenter');
    }
    public function Programpage()
    {
        $user = Auth::user();
        return view('Admin.Programslist',['user'=> $user]);
    }
    public function Supplierpage()
    {
        return view('Admin.Supplierlist');
    }
    public function itempage()
    {
        return view('Admin.Itemlist');
    }
    public function profile()
    {
        $user = Auth::user();
        return view('Admin.profile.profile', ['user' => $user]);
    }

    public function profileChange()
    {
        $user = Auth::user();
        return view('Admin.profile.change_pass', ['user' => $user]);
    }

    public function barangayPage(){
        return view('Admin.barangayList');
    }




}
