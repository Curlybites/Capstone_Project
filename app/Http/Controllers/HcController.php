<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Patient;
class HcController extends Controller
{
    public function hcInventory(){
        $user = Auth::user();
        return view('Health_Center.hcInventory', ['user' => $user]);
    }
    public function hcPatient(){
        $user = Auth::user();
        return view('Health_Center.hcPatient', ['user' => $user]);
    }
    public function hcPatientView(){
        $user = Auth::user();
        return view('Health_Center.hcPatientView', ['user' => $user]);
    }
    public function hcItemList(){
        $user = Auth::user();
        return view('Health_Center.hcItemList', ['user' => $user]);
    }
    public function hcReport(){
        $user = Auth::user();
        return view('Health_Center.hcReport', ['user' => $user]);
    }

    public function storePatient(Request $request){
        $request->validate([
        
            'fname'=>'required',
            'mname'=>'required',
            'lname'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'program'=>'required',
            'healthcenter'=>'nullable',
            'district'=>'nullable'

        ]);

        Patient::create($request->all());

        return back()->with('sucess', 'ikaw na bahala');
    }

    public function listPatient()
    {
        $tableData = Patient::all(); // Replace TableName with your actual model name
        return view('Health_Center.hcPatient', ['tableData' => $tableData]);
    }
}
