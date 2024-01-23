<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('Admin.dashboard');
    }

    
    public function pmDashboard(){
        return view('Program_Manager.Dashboard');
    }


  
}
