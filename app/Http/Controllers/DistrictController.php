<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class DistrictController extends Controller
{
    public function districtlistPage()
    {
        $districts = District::with('district')->get();
        $barangays = Barangay::with('barangay')->get();
        $user = Auth::user();

        return view('district.districtList', ['districts' => $districts,'user'=>$user]);
 
    }
    public function create()
    {
        return view('district.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|integer',
        ]);

        District::create($request->all());

        return redirect()->route('district.districtList')->with('success', 'District created successfully!');
    }

    public function edit(District $district)
    {
        return view('district.edit', ['district' => $district]);
    }

    public function update(Request $request, District $district)
    {
        $request->validate([
            'number' => 'required|integer',
        ]);

        $district->update($request->all());

        return redirect()->route('district.districtList')->with('success', 'District updated successfully!');
    }

    public function destroy(District $district)
    {
        $district->delete();

        return redirect()->route('district.districtList')->with('success', 'District deleted successfully!');
    }


    //Blade Pages//
    public function receive()
    {
        $user = Auth::user();
        return view('District.dtReceive', ['user' => $user]);
    }

    public function dtInventory_List()
    {
        $user = Auth::user();
        return view('District.dtInventory', ['user' => $user]);
    }

    public function allocation()
    {
        $user = Auth::user();
        return view('District.dtAllocation', ['user' => $user]);
    }
    public function Report()
    {
        $user = Auth::user();
        return view('District.dtReports', ['user' => $user]);
    }

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
