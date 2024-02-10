<?php

namespace App\Http\Controllers;

use App\Models\Ppmpdatas;
use App\Models\Ppmpitemdatas;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;



class ProgramManagerController extends Controller
{

    public function Reportpage()
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
