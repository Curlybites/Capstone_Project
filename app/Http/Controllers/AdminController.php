<?php

namespace App\Http\Controllers;

use App\Models\AssignedHealthCenter;
use App\Models\AssignedProgramManager;
use App\Models\AssignedDistrictSupervisor;
use App\Models\BarangaysPerDistrict;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\District;
use App\Models\Barangay;
use App\Models\Role;
use App\Models\HealthCenters;
use App\Models\Program;
use App\Models\HealthCentersPerBarangay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Colors\Rgb\Channels\Red;

class AdminController extends Controller
{
    public function districtListpage()
    {
        // $districtsData = District::join('assigned_district_supervisors', 'districts.number', '=', 'assigned_district_supervisors.district_number')
        //     ->join('users', 'districts.supervisor_id', '=', 'users.id')
        //     ->select('districts.*', 'assigned_district_supervisors.*', 'users.*')
        //     ->get();

        $districtData = District::all();

        $userData = DB::table('users')->where('role', 4)->orderBy('id')->get();
        $barangayData = Barangay::all();
        $user = Auth::user();
        $healthcenterData = HealthCenters::all();
        $districSupervisorData = AssignedDistrictSupervisor::all();
        $districtsData = AssignedDistrictSupervisor::join('districts', 'assigned_district_supervisors.district_number', '=', 'districts.number')
        ->join('users', 'assigned_district_supervisors.district_supervisor_id', '=', 'users.id')
        ->select('districts.*', 'users.*')
        ->get(); 

        // return view('Admin.districtList', ['districtsData' => $districtsData,'districSupervisorData'=> $districSupervisorData, 'districtData' => $districtData, 'barangayData' => $barangayData, 'healthcenterData' => $healthcenterData, 'userData' => $userData, 'user' => $user]);
        return view('Admin.districtList', [
        'districtData' => $districtData,
        'districSupervisorData' => $districSupervisorData, 
        'districtsData' => $districtsData, 
        'barangayData' => $barangayData, 
        'healthcenterData' => $healthcenterData, 
        'userData' => $userData, 'user' => $user]);
        // return view('Admin.districtList', compact('districts, barangays'));
    }

    public function districtStore(Request $request)
    {
        $district = new District();
        $district->number = $request->input('districtNumber');
        $district->supervisor_id = $request->input('districtSupervisor');
        $district->save();

        $districtSupervisor = new AssignedDistrictSupervisor();
        $districtSupervisor->district_number = $district->number;
        $districtSupervisor->district_supervisor_id = $district->supervisor_id;
        $districtSupervisor->save();

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
        $district->number = $request->districtNumber;
        $district->supervisor_id = $request->districtSupervisor;
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
        $barangaysData = BarangaysPerDistrict::join('barangays', 'barangays_per_districts.barangay_id', '=', 'barangays.id')
            ->join('districts', 'barangays_per_districts.district_id', '=', 'districts.id')
            ->select('districts.*', 'barangays.*')
            ->get();
        return view('Admin.barangayList', [
            'user' => $user,
            'barangayData' => $barangayData,
            'districtData' => $districtData,
            'barangayPerDistrictData' => $barangayPerDistrictData,
            'barangaysData' => $barangaysData
        ]);
    }

    public function updateBarangay(Request $request, Barangay $barangay)
    {

        $barangay = Barangay::find($request->id);
        $barangay->barangay_name = $request->barangayName;
        $barangay->save();
        return redirect('/Admin/Barangay_List')->with('success', 'Update successful!');
    }

    public function barangayStore(Request $request)
    {
        $barangay = new Barangay();
        $barangay->barangay_name = $request->input('barangayName');
        $barangay->district_id = $request->input('districtNumber');
        $barangay->save();

        $barangayId = $barangay->id;

        $barangayPerDistrict = new BarangaysPerDistrict();
        $barangayPerDistrict->barangay_id = $barangayId;
        $barangayPerDistrict->district_id = $request->input('districtNumber');
        $barangayPerDistrict->save();

        return redirect('/Admin/Barangay_List')->with('message', 'Barangay created successfully!');
    }




    public function Healthcenterpage()
    {
        $healthcenterData = HealthCenters::all();
        $barangayData = Barangay::all();
        $user = Auth::user();
        $healthCenterPerBrgyData = HealthCentersPerBarangay::all();
        $userData = DB::table('users')->where('role', 5)->orderBy('id')->get();
        $healthCentersData = HealthCentersPerBarangay::join('health_centers', 'health_centers_per_barangays.health_center_id', '=', 'health_centers.id')
            ->join('barangays', 'health_centers_per_barangays.barangay_id', '=', 'barangays.id')
            ->join('users', 'health_centers_per_barangays.health_center_staff_id', '=', 'users.id')
            ->select('health_centers.*', 'barangays.*', 'users.*')
            ->get();

        return view('Admin.HealthCenter', [
            'healthcenterData' => $healthcenterData,
            'user' => $user,
            'barangayData' => $barangayData,
            'healthCenterPerBrgyData' => $healthCenterPerBrgyData,
            'userData' => $userData,
            'healthCentersData' => $healthCentersData,
        ]);
    }


    public function updatehc(Request $request, HealthCenters $healthcenter)
    {
        $healthcenter = HealthCenters::find($request->id);
        // $healthcenter->health_center_name = $request->healthcenterName;
        $healthcenter->barangay_id = $request->barangayName;
        $healthcenter->save();
        return redirect('/Admin/Health_Center_List')->with('success', 'Update successful!');
    }

    public function healthcenterStore(Request $request)
    {
        $healthcenter = new HealthCenters();
        $healthcenter->health_center_name = $request->input('healthcenterName');
        $healthcenter->barangay_id = $request->input('barangayName');
        $healthcenter->save();

        $healthcenterId = $healthcenter->id;
        // $healthcenterstaff = new User();
        // $healthcenterstaffId = $healthcenterstaff->id;
        $healthCenterStaff = new AssignedHealthCenter();
        $healthCenterStaff->health_center_id = $healthcenterId;
        $healthCenterStaff->health_center_staff_id = $request->input('healthCenterStaff');
        $healthCenterStaff->save();

        $healthCenterPerBrgy = new HealthCentersPerBarangay();
        $healthCenterPerBrgy->health_center_id = $healthcenterId;
        $healthCenterPerBrgy->health_center_staff_id = $request->input('healthCenterStaff');
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
        // $program->program_manager_id = $request->programManager;
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
