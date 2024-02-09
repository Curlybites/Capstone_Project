<?php

namespace App\Http\Controllers;

use App\Models\Project_Manager;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
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
    

    public function PPMPEdit()
    {
        $user = Auth::user();
        $ppmp = Project_Manager::all();
        return view('Program_Manager.pmPPMPEdit', ['user' => $user, 'ppmp' => $ppmp]);
    }

    // public function PMPPrint()
    // {
    //     $user = Auth::user();
    //     $ppmp = Project_Manager::all();
    //     return view('Program_Manager.pmPPMPPrint', ['user' => $user, 'ppmp' => $ppmp]);
    // }
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

    public function editPPMP(Request $request, $id)
    {
        $PPMP = Project_Manager::findOrFail($id);
        $PPMP->update($request->all());

        return back()->with('success', 'PPMP updated successfully.');
    }

    public function PPMPView($id)
    {
        $user = Auth::user();
        $ppmp = Project_Manager::find($id);
        return view('Program_Manager.pmPPMPView', ['user' => $user, 'ppmp' => $ppmp]);
    }

    // public function printPPMP($id)
    // { 
    //     $user = Auth::user();
    //     $ppmp = Project_Manager::find($id);

    //     return view('Program_Manager.pmPPMPPrint', ['user' => $user, 'ppmp' => $ppmp]);
    // }

public function deletePPMP($id)
{
    $user = Auth::user();
    $ppmp = Project_Manager::find($id);
    $ppmp->delete();
    return view('Program_Manager.PPMPlist', ['user' => $user, 'ppmp' => $ppmp]);

    
    return redirect()->route('Program_Manager.PPMPlist')->with('success','PPMP is deleted sucessfully');
}

}