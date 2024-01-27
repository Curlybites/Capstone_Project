<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    public function itemList(){
        $user = Auth::user();
        return view('Supplier.Item',['user' => $user]);
    }
}
