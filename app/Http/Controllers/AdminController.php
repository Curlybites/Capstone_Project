<?php

namespace App\Http\Controllers;

use App\Models\AssignedProgramManager;
use App\Models\BarangaysPerDistrict;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\District;
use App\Models\Barangay;
use App\Models\Role;
use App\Models\HealthCenters;
use App\Models\Program;
use App\Models\HealthCentersPerBarangay;
use App\Models\AssignedProgramManagerController;
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
        return view('Admin.districtList', ['districtData' => $districtData, 'barangayData' => $barangayData, 'healthcenterData' => $healthcenterData, 'userData' => $userData, 'user' => $user]);
        // return view('Admin.districtList', compact('districts, barangays'));
    }

    public function districtStore(Request $request)
    {
        $district = new District();
        $district->number = $request->input('districtNumber');
        $district->supervisor = $request->input('districtSupervisor');
        $district->save();
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

    public function districtList()
    {
        $data = District::all();
        $user = Auth::user();
        return view('Admin.districtList', ['districts' => $data], ['district' => $data, 'user' => $user]);
    }

    public function barangayPage()
    {
        $user = Auth::user();
        $barangayData = Barangay::all();
        $districtData = District::all();
        $barangayPerDistrictData = BarangaysPerDistrict::all();
        return view('Admin.barangayList', ['user' => $user, 'barangayData' => $barangayData, 'districtData' => $districtData, 'barangayPerDistrictData' => $barangayPerDistrictData]);
    }

    public function updateBarangay(Request $request, Barangay $barangay)
    {

        $barangay = Barangay::find($request->id);
        $barangay->name = $request->barangayName;
        $barangay->save();
        return redirect('/Admin/Barangay_List')->with('success', 'Update successful!');
    }

    public function barangayStore(Request $request)
    {
        $barangay = new Barangay();
        $barangay->name = $request->input('barangayName');
        $barangay->district_id = $request->input('districtNumber');
        $barangay->save();

        $barangayId = $barangay->id;

        $barangayPerDistrict = new BarangaysPerDistrict();
        $barangayPerDistrict->barangay_id = $barangayId;
        $barangayPerDistrict->district_id = $request->input('districtNumber');
        $barangayPerDistrict->save();

        return redirect('/Admin/Barangay_List')->with('message', 'Barangay created successfully!');
    }

    public function updatehc(Request $request, HealthCenters $healthcenter)
    {
        $healthcenter = HealthCenters::find($request->id);
        $healthcenter->name = $request->healthcenterName;
        $healthcenter->save();
        return redirect('/Admin/Health_Center_List')->with('success', 'Update successful!');
    }



    public function Healthcenterpage()
    {
        $healthcenterData = HealthCenters::all();
        $barangayData = Barangay::all();
        $user = Auth::user();
        $healthCenterPerBrgyData = HealthCentersPerBarangay::all();
        $userData = DB::table('users')->where('role', 5)->orderBy('id')->get();
        return view('Admin.HealthCenter', [
            'healthcenterData' => $healthcenterData,
            'user' => $user,
            'barangayData' => $barangayData,
            'healthCenterPerBrgyData' => $healthCenterPerBrgyData,
            'userData' => $userData
        ]);
    }

    public function healthcenterStore(Request $request)
    {
        $healthcenter = new HealthCenters();
        $healthcenter->name = $request->input('healthcenterName');
        $healthcenter->barangay_id = $request->input('barangayName');
        $healthcenter->save();

        $healthcenterId = $healthcenter->id;

        $healthCenterPerBrgy = new HealthCentersPerBarangay();
        $healthCenterPerBrgy->health_center_id = $healthcenterId;
        $healthCenterPerBrgy->barangay_id = $request->input('barangayName');
        $healthCenterPerBrgy->save();


        return redirect('/Admin/Health_Center_List')->with('success', 'Health Center created successfully!');
    }
    public function Programpage()
    {
        $user = Auth::user();
        $userData = DB::table('users')->where('role', 2)->orderBy('id')->get();
        
        $usersData = AssignedProgramManager::join('programs', 'assigned_program_managers.program_id', '=', 'programs.id')
        ->join('users', 'assigned_program_managers.program_manager_id', '=', 'users.id')
        ->select('users.*', 'programs.*')
        ->get();
        // $usersData = User::all();    
        $programData = Program::all();
        $assignedData = AssignedProgramManager::all();
        return view('Admin.Programslist', [
            'user' => $user,
            'programData' => $programData,
            'userData' => $userData,
            'assignedData' => $assignedData,
            'usersData' => $usersData
        ]);

    }

    public function programUpdate(Request $request, Program $program)
    {
        $program = Program::find($request->id);
        $program->name = $request->programName;
        // $program->program_manager = $request->programManager;
        $program->save();
        return redirect('/Admin/Program_List')->with('message', 'Update successfully!');
    }

    public function programStore(Request $request)
    {

        $program = new Program();
        $program->name = $request->input('programName');
        // $program -> program_manager = $request->input('programManager');
        $program->save();



        $programId = $program->id;

        $programManager = new AssignedProgramManager();
        $programManager->program_manager_id = $request->input('programManager');
        // $programManager->program_manager_id = $programManagerId;
        $programManager->program_id = $programId;
        $programManager->save();



        return redirect('/Admin/Program_List')->with('message', 'Program created successfully!');
    }

    public function rolePage()
    {
        $user = Auth::user();
        $roleData = Role::all();
        return view('Admin.Rolelist', ['user' => $user, 'roleData' => $roleData]);
    }

    public function roleStore(Request $request)
    {
        $role = new Role();
        $role->name = $request->input('roleName');
        $role->save();

        return redirect('/Admin/Role_List')->with('message', 'Role created successfully!');
    }

    public function roleUpdate(Request $request, Role $role)
    {
        $role = Role::find($request->id);
        $role->name = $request->roleName;
        $role->save();
        return redirect('/Admin/Role_List')->with('message', 'Update successfully!');
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
