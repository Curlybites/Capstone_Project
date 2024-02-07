<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class ProgramManagerController extends Controller
{
    public function Inventorypage()
    {
        $user = Auth::user();
        return view('Program_Manager.Inventorylist', ['user' => $user]);
    }

    public function Allocationpage()
    {
        $user = Auth::user();
        return view('Program_Manager.Allocationlist', ['user' => $user]);
    }

    public function PPMPpage()
    {
        $user = Auth::user();
        return view('Program_Manager.PPMPlist', ['user' => $user]);
    }

    public function Profilepage()
    {
        $user = Auth::user();
        return view('Program_Manager.Profile', ['user' => $user]);
    }
}
