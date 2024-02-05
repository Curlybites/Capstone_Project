<?php

namespace App\Http\Controllers;

use App\Models\Project_Manager;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProgramManagerController extends Controller
{

    public function Reportpage()
    {
        $user = Auth::user();
        return view('Program_Manager.Reportlist', ['user' => $user]);
    }

    public function Allocationpage()
    {
        $user = Auth::user();
        return view('Program_Manager.pmAllocationlist', ['user' => $user]);
    }

    public function PPMPpage()
    {
        $user = Auth::user();
        $ppmp = Project_Manager::all();

        return view('Program_Manager.PPMPlist', ['user' => $user, 'ppmp' => $ppmp]);

    }

    public function Profilepage()
    {
        $user = Auth::user();
        return view('Program_Manager.Profile', ['user' => $user]);
    }
    public function pmAccountChange()
    {
        $user = Auth::user();
        return view('Program_Manager.pmAccountChange', ['user' => $user]);
    }
    public function pmAllocationView()
    {
        $user = Auth::user();
        return view('Program_Manager.pmAllocationView', ['user' => $user]);
    }
    public function pmAllocationEdit()
    {
        $user = Auth::user();
        return view('Program_Manager.pmAllocationEdit', ['user' => $user]);
    }
    public function PPMPView()
    {
        $user = Auth::user();
        $ppmp = Project_Manager::all();

        return view('Program_Manager.pmPPMPView', ['user' => $user, 'ppmp' => $ppmp]);
    }

    public function PPMPEdit()
    {
        $user = Auth::user();
        return view('Program_Manager.pmPPMPEdit', ['user' => $user]);
    }

    public function PPMPPrint()
    {
        $user = Auth::user();
        $ppmp = Project_Manager::all();

        return view('Program_Manager.pmPPMPPrint', ['user' => $user, 'ppmp' => $ppmp]);
    }
    public function AllocationPrint()
    {
        $user = Auth::user();
        return view('Program_Manager.pmAllocationPrint', ['user' => $user]);
    }

    public function storePPMP(Request $request)
    {
        $request->validate([
            'year' => 'required',
            'department' => 'required',
            'programtitle' => 'required',
            'projecttitle' => 'required',
            'typeofcontract' => 'required',
            'accounttitle' => 'required',
            'itemname' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'unitofissue' => 'required',
            'unitprice' => 'required',
            'schedule' => 'required',
        ]);

        Project_Manager::create($request->all());
        return back()->with('sucess', 'PPMP created successfully');
    }
}
