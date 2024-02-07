<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\District;
use App\Models\Barangay;
use App\Models\HealthCenters;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Colors\Rgb\Channels\Red;

class AdminController extends Controller
{
    public function districtListpage()
    {
        $districtData = District::all();
        $userData = DB::table('users')->where('role', 4)->orderBy('id')->get();
        $barangayData = Barangay::all();
        $user = Auth::user();
        $healthcenterData = HealthCenters::all();
        return view('Admin.districtList', ['districtData' => $districtData, 'barangayData' => $barangayData, 'healthcenterData' => $healthcenterData, 'userData' => $userData, 'user'=>$user ]);
        // return view('Admin.districtList', compact('districts, barangays'));
    }

    public function districtStore(Request $request)
    {
        $district = new District();
        $district -> number = $request->input('districtNumber');
        $district -> barangay = $request->input('barangayName');
        $district -> healthcenter = $request->input('healthcenterName');
        $district -> supervisor = $request->input('districtSupervisor');
        $district-> save();
        // dd($request->all());
        // $districtData = $request->all(['districtNumber']);
        // District::create($districtData);
        
        return redirect('/Admin/District_List')->with('message', 'District created successfully!');
    }

    // public function edit(District $district)
    // {
    //     return view('Admin.edit', ['district' => $district]);
    // }
    public function updateDistrict(Request $request, District $district)
    {
        // $district = District::all();
        $district = District::find($request->id);
        $district->supervisor = $request->districtSupervisor;
        $district->save();
        return redirect('/Admin/District_List')->with('success', 'Update successful !');

        // $barangay = Barangay::find($request->id);
        // $barangay->name = $request->barangayName;
        // $barangay->save();
        // return redirect('/Admin/Barangay_List')->with('success', 'Update successful!');

    }

    public function destroy(District $district)
    {
        $district->delete();

        return redirect()->route('Admin/districtList')->with('success', 'District deleted successfully!');
    }

    public function districtList()
    {
        $data = District::all();
        $user = Auth::user();
        return view('Admin.districtList', ['districts' => $data], ['district' => $data, 'user'=>$user]);
    }

    public function barangayPage(){
        $user = Auth::user();
        $barangayData = Barangay::all();
        return view('Admin.barangayList',['user'=>$user, 'barangayData'=>$barangayData]);
    }

    public function updateBarangay(Request $request, Barangay $barangay){
        
        $barangay = Barangay::find($request->id);
        $barangay->name = $request->barangayName;
        $barangay->save();
        return redirect('/Admin/Barangay_List')->with('success', 'Update successful!');
    }
    // public function updatebarangay(Request $request, $id)
    // {

    //     $this->validate($request,[
    //         'name' => 'required'
    //     ]);
    //     $barangay = Barangay::find($id);
    //     $barangay->name = $request->input('barangayName');
    //     $barangay->save();
    //     return redirect('/Admin/Barangay_List')->with('success', 'Update successful!');
    // }


    public function barangayStore(Request $request)
    {
        $barangay = new Barangay();
        $barangay -> name = $request->input('barangayName');
        // $barangay -> district = $request->input('districtNumber');
        $barangay-> save();
        // dd($request->all());
        // $districtData = $request->all(['districtNumber']);
        // District::create($districtData);
        
        return redirect('/Admin/Barangay_List')->with('message', 'Barangay created successfully!');
    }

    // public function barangaylistpage()
    // {
    //     $user = Auth::user();
    //     return view('Admin.barangayList',['user'=>$user]);
    // }

    // Health Center START
    // public function edit($id){
    //     $healthcenter = HealthCenters::findOrFail($id);
    //     return view ('Admin.HealthCenter', ['data' => $healthcenter]);
    // }

    public function updatehc(Request $request, HealthCenters $healthcenter){
        $healthcenter = HealthCenters::find($request->id);
        $healthcenter->name = $request->healthcenterName;
        $healthcenter->save();
        return redirect('/Admin/Health_Center_List')->with('success', 'Update successful!');
    }



    public function Healthcenterpage()
    {
        $healthcenterData = HealthCenters::all();
        $user = Auth::user();
        return view('Admin.HealthCenter', ['healthcenterData' => $healthcenterData,'user'=>$user]);
    }

    public function healthcenterStore(Request $request)
    {
        $healthcenter = new HealthCenters();
        $healthcenter -> name = $request->input('healthcenterName');
        $healthcenter-> save();
        // dd($request->all());
        // $districtData = $request->all(['districtNumber']);
        // District::create($districtData);
        
        return redirect('/Admin/Health_Center_List')->with('success', 'Health Center created successfully!');
    }
    public function Programpage()
    {
        $user = Auth::user();
        $userData = DB::table('users')->where('role', 2)->orderBy('id')->get();
        $programUser = User::join('programs', 'users.id', '=', 'programs.program_manager')
        ->select('users.firstname', 'users.lastname','programs.id','programs.name')
        ->get();
        // $programData = Program::all();
        return view('Admin.Programslist', ['user'=> $user, 'userData' => $userData,  'programUsers'=>$programUser]);

    }

    public function programUpdate(Request $request, Program $program){
        $program = Program::find($request->id);
        $program->name = $request->programName;
        $program->program_manager = $request->programManager;
        $program->save();
        return redirect('/Admin/Program_List')->with('message', 'Update successfully!');
    }

    public function programStore(Request $request)
    {
        $program = new Program();
        $program -> name = $request->input('programName');
        $program -> program_manager = $request->input('programManager');
        $program-> save();
        // dd($request->all());
        // $districtData = $request->all(['districtNumber']);
        // District::create($districtData);
        
        return redirect('/Admin/Program_List')->with('message', 'Health Center created successfully!');
    }
    public function Supplierpage()
    {
        return view('Admin.Supplierlist');
    }
    public function itempage()
    {
        return view('Admin.Itemlist');
    }
    public function profile()
    {
        $user = Auth::user();
        return view('Admin.profile.profile', ['user' => $user]);
    }

    public function profileChange()
    {
        $user = Auth::user();
        return view('Admin.profile.change_pass', ['user' => $user]);
    }

    
   




}
