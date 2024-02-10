<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    public function itemList()
    {
        $user = Auth::user();
        return view('Supplier.Item', ['user' => $user]);
    }

    public function profileSupplier()
    {
        $user = Auth::user();
        return view('Supplier.profile.profile', ['user' => $user]);
    }

    public function profileChangeSupplier()
    {
        $user = Auth::user();
        return view('Supplier.profile.change_pass', ['user' => $user]);
    }

    public function ppmp(){
        $user = Auth::user();
        return view('Supplier.Po',['user' => $user]);
    }


}
