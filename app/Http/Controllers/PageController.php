<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function AdminLogin(){
        return view('Admin.adminLogin');
    }

    public function districtPage(){
        return view('District.dtLogin');
    }

    public function pmPage(){
        return view('Program_Manager.pmLogin');
    }

    public function hdPage(){
        return view('Health_Department.hdLogin');
    }

    public function hcPage(){
        return view('Health_Center.hcLogin');
    }


    public function adminDashboard(){
        $user = Auth::user();
        return view('Admin.dashboard',['user' => $user]);
    }

    
    public function pmDashboard(){
        $user = Auth::user();
        return view('Program_Manager.Dashboard',['user' => $user]);
    }

    public function hdDashboard(){
        $user = Auth::user();
        return view('Health_Department.hdDashboard',['user' => $user]);
    }

    public function dtDashboard(){
        $user = Auth::user();
        return view('District.dtDashboard',['user' => $user]);
    }

    public function hcDashboard(){
        $user = Auth::user();
        return view('Health_Center.hcDashboard',['user' => $user]);
    }

    public function supplierDashboard(){
        $user = Auth::user();
        return view('Supplier.Dashboard',['user' => $user]);
    }


  
}
