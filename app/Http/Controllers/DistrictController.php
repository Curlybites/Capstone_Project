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

        return view('district.districtList', ['districts' => $districts]);
 
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
}
