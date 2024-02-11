<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Items;
use App\Models\Send;
use App\Models\Distribute
;




class HcController extends Controller
{
    public function hcInventory()
    {
        $user = Auth::user();
        return view('Health_Center.hcInventory', ['user' => $user]);
    }
    public function hcPatient()
    {
        $user = Auth::user();
        return view('Health_Center.hcPatient', ['user' => $user]);
    }
    // public function hcPatientView()
    // {
    //     $user = Auth::user();
    //     // return view('Health_Center.hcPatientView', ['user' => $user]);
    //     // $tableData = Patient::all($id); // Replace TableName with your actual model name
    //     return view('Health_Center.hcPatientView');
    // }
    public function hcPatientView($id)
    {
        // $user = Auth::user();
        // return view('Health_Center.hcPatientView', ['user' => $user]);

        $user = Auth::user();
        $tableData = Patient::find($id); // Replace TableName with your actual model name
        return view('Health_Center.hcPatientView', ['user' => $user, 'tableData' => $tableData]);
    }

    public function listPatientPrint()
    {
        // $user = Auth::user();
        // $tableData = Patient::find($id); // Replace TableName with your actual model name
        // return view('Health_Center.hcPatientPrint', ['user' => $user, 'tableData' => $tableData]);

        $user = Auth::user();
        return view('Health_Center.hcPatientPrint', ['user' => $user]);
    }

    public function hcItemList()
    {
        $user = Auth::user();
        return view('Health_Center.hcItemList', ['user' => $user]);
    }
    public function hcReport()
    {
        $user = Auth::user();
        return view('Health_Center.hcReport', ['user' => $user]);
    }

    public function storePatient(Request $request)
    {
        $request->validate([

            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'program' => 'required',
            'healthcenter' => 'nullable',
            'district' => 'nullable'

        ]);

        Patient::create($request->all());

        return back()->with('success', 'ikaw na bahala');
    }

    // public function itemSentPatient(Request $request, $id)
    // {
    //     $patients = Patient::find($id);

    //     $request->validate([

    //         'quantity' => 'required',
    //         'type' => 'required',
    //         'name' => 'required',
    //         'program' => 'required',
    //         'expiration' => 'required',

    //     ]);

    //     Send::create($request->all());

    //     return back()->with('success', 'ikaw na bahala');
    // }


    // public function listPatientnMedicine()
    // {
    //     $tableData = Patient::all(); // Replace TableName with your actual model name
    //     return view('Health_Center.hcPatientPrint', ['tableData' => $tableData]);
    // }


    // FOR LIST OF PATIENT AND UPDATE
    public function listPatient()
    {
        $user = Auth::user();
        $tableData = Patient::all(); // Replace TableName with your actual model name
        return view('Health_Center.hcPatient', ['user' => $user, 'tableData' => $tableData]);
    }
    public function updatePatient(Request $request, $id)
    {
        $patients = Patient::findOrFail($id);

        $patients->update($request->all());

        return back()->with('success', 'Patient updated successfully.');
    }

    // FOR DISTRIBUTING THE ITEMS FOR PATIENT
    public function itemSentPatient($id)
    {
        $user = Auth::user();
        $send = Patient::find($id);
        return view('Health_Center.hcItemList', ['user' => $user, 'send' => $send]);
    }


    // NAG GEGET PERO DI PUMAPASOK SA DB
    public function distribute(Request $request)
    {
        $request->validate([

            'quantity' => 'required',
            'unit' => 'required',
            'item' => 'required',
            'description' => 'required'

        ]);

        Distribute::create($request->all());

        return back()->with('success', 'ikaw na bahala');
    }


    // FOR SEND ITEMS FILTRATION
    public function sendItems()
    {
        $user = Auth::user();
        // Fetch active items
        $tableData = Patient::where('status', true)->get();
        return view('Health_Center.hcSendItems', ['user' => $user, 'tableData' => $tableData]);
    }

    // FOR INVENTORY
    public function listItem()
    {
        $items = Items::all(); // Replace TableName with your actual model name
        return view('Health_Center.hcInventory', ['items' => $items]);
    }

    // public function index(Request $request)
    // {

    //     $search = $request->input('search');

    //     // Use the where method to filter by the 'name' column
    //     $items = Items::where('name', 'like', '%' . $search . '%')->get();

    //     return view('Health_Center.hcItemList', compact('items'));
    // }


    // FOR ACCCOUT
    public function Account()
    {
        $user = Auth::user();
        return view('District.dtAccount', ['user' => $user]);
    }

    public function AccountChange()
    {
        $user = Auth::user();
        return view('District.dtAccountChange', ['user' => $user]);
    }
}
