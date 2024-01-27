<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function districtListpage(){
        return view('Admin.districtList');
    }
    public function barangaylistpage(){
        return view('Admin.Barangaylist');
    }
    public function Healthcenterpage(){
        return view('Admin.HealthCenter');
    }
    public function Programpage(){
        return view('Admin.Programslist');
    }
    public function Supplierpage(){
        return view('Admin.Supplierlist');
    }
    public function itempage(){
        return view('Admin.Itemlist');
    }
    // public function index(){
    //     return view('admin.index');
    // }



 

}
