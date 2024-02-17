<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\HcInventoryItems;
use App\Models\HcSendItems;





class HcController extends Controller
{
    public function hcInventory()
    {
        $user = Auth::user();
        return view('Health_Center.hcInventory', ['user' => $user]);
    }

    public function hcInventoryList()
    {
        $user = Auth::user();

        $hcinventoryitems = HcInventoryItems::all(); // Replace TableName with your actual model name
        return view('Health_Center.hcInventory', ['hcinventoryitems' => $hcinventoryitems, 'user' => $user]);
    }
    public function hcPatient()
    {
        $user = Auth::user();
        return view('Health_Center.hcPatient', ['user' => $user]);
    }

    public function hcPatientView($id)
    {
        $user = Auth::user();
        $tableData = Patient::find($id);

        $joinedPatientItem = DB::table('hc_send_items')
            ->join('patients', 'hc_send_items.patient_ID', '=', 'patients.id')
            ->select('hc_send_items.quantity', 'hc_send_items.unit', 'hc_send_items.item', 'hc_send_items.description')
            ->where('hc_send_items.patient_ID', $id)
            ->get(); // Change this to ->first() if you expect only one result

        return view('Health_Center.hcPatientView', ['user' => $user, 'tableData' => $tableData, 'joinedPatientItem' => $joinedPatientItem]);
    }

    public function listPatientPrint()
    {
        $user = Auth::user();
        return view('Health_Center.hcPatientPrint', ['user' => $user]);
    }

    public function hcItemList()
    {
        $user = Auth::user();
        return view('Health_Center.hcItemList', ['user' => $user]);
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
    public function itemSendPatientInfo($id)
    {
        $user = Auth::user();
        $patientid = Patient::find($id);
        $itemid = HcInventoryItems::find($id);
        return view('Health_Center.hcItemList', ['user' => $user, 'patientid' => $patientid, 'itemid' => $itemid]);
    }

    public function HcSendItemsInput(Request $request)
    {
        $patientId = $request->input('patient_ID');
        $patientinfo = Patient::find($patientId);

        Validator::make($request->all(), [
            'stp.*.quantity' => 'required',
            'stp.*.unit' => 'required',
            'stp.*.item' => 'required',
            'stp.*.description' => 'required',
        ]);

        foreach ($request->stp as $stps) {
            $stps['patient_ID'] = $patientinfo->id;
            HcSendItems::create($stps);
        }
        return back()->with('success', 'Data has been saved successfully.');
    }



    // FOR SEND ITEMS FILTRATION
    public function sendItemsActiveList()
    {
        $user = Auth::user();
        // Fetch active items
        $tableData = Patient::where('status', true)->get();
        return view('Health_Center.hcSendItems', ['user' => $user, 'tableData' => $tableData]);
    }


    // FOR ACCCOUT
    public function hcAccount()
    {
        $user = Auth::user();
        return view('Health_Center.hcAccount', ['user' => $user]);
    }

    public function hcAccountChange()
    {
        $user = Auth::user();
        return view('Health_Center.hcAccountChange', ['user' => $user]);
    }
}
