<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\HealthCenters;
use App\Models\Program;
use App\Models\Role;
use App\Models\District;
use Illuminate\Support\Facades\Auth;
// use ConsoleTVs\Charts\Facades\Charts;


class PageController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function AdminLogin(){
        return view('Admin.adminLogin');
    }

    public function districtPage(){
        return view('District.dtLogin');
    }

    public function pmPage(){
        return view('Program_Manager.pmLogin');
    }

    public function hdPage(){
        return view('Health_Department.hdLogin');
    }

    public function hcPage(){
        return view('Health_Center.hcLogin');
    }


    public function adminDashboard(){
        $user = Auth::user();
        $totalUser = User::count();
        $totalUserString = $this->userString($totalUser);

        $totalHealthCenter = HealthCenters::count();
        $totalHealthCenterString = $this->healthCenterString($totalHealthCenter);
        
        $totalBarangay = Barangay::count();
        $totalBarangayString = $this->barangayString($totalBarangay);

        $totalProgram = Program::count();
        $totalProgramString = $this->programString($totalProgram);

        $totalRole = Role::count();
        $totalRoleString = $this->roleString($totalRole);

        $totalDistrict = District::count();
        $totalDistrictString = $this->districtString($totalDistrict);

        $data = [
            'totalUser' => User::count(),
            'totalHealthCenter' => HealthCenters::count(),
            'totalBarangay' => Barangay::count(),
            'totalProgram' => Program::count(),
            'totalRole' => Role::count(),
            'totalDistrict' => District::count()
        ];

        return view('Admin.dashboard',[
            'data' => $data,
            'user' => $user,
            'totalUser' => $totalUser, 
            'totalUserString'=>$totalUserString, 
            'totalHealthCenter' => $totalHealthCenter, 
            'totalHealthCenterString'=>$totalHealthCenterString, 
            'totalBarangay' => $totalBarangay, 
            'totalBarangayString' => $totalBarangayString, 
            'totalProgram' => $totalProgram, 
            'totalProgramString' => $totalProgramString,
            'totalRole' => $totalRole,
            'totalRoleString' => $totalRoleString,
            'totalDistrict' => $totalDistrict,
            'totalDistrictString' => $totalDistrictString,


        ]);
    }

    public function userString($totalUserString) {
        if ($totalUserString == 1) {
            return "Total User:";
        } else {
            return "Total Users:";
        }
    }
    public function healthCenterString($totalHealthCenterString) {
        if ($totalHealthCenterString == 1) {
            return "Total Health Center:";
        } else {
            return "Total Health Centers:";
        }
    }

    public function barangayString($totalBarangayString) {
        if ($totalBarangayString == 1) {
            return "Total Barangay:";
        } else {
            return "Total Barangays:";
        }
    }

    public function programString($totalProgramString) {
        if ($totalProgramString == 1) {
            return "Total Program:";
        } else {
            return "Total Programs:";
        }
    }

    public function roleString($totalRoleString) {
        if ($totalRoleString == 1) {
            return "Total Role:";
        } else {
            return "Total Roles:";
        }
    }

    public function districtString($totalDistrictString) {
        if ($totalDistrictString == 1) {
            return "Total District:";
        } else {
            return "Total Districts:";
        }
    }

    public function pmDashboard(){
        $user = Auth::user();
        return view('Program_Manager.Dashboard',['user' => $user]);
    }

    public function hdDashboard(){
        $user = Auth::user();
        return view('Health_Department.hdDashboard',['user' => $user]);
    }

    public function dtDashboard(){
        $user = Auth::user();
        return view('District.dtDashboard',['user' => $user]);
    }

    public function hcDashboard(){
        $user = Auth::user();
        return view('Health_Center.hcDashboard',['user' => $user]);
    }

    public function supplierDashboard(){
        $user = Auth::user();
        return view('Supplier.Dashboard',['user' => $user]);
    }

  
}
