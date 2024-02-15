<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\HealthCenters;
use App\Models\AssignedHealthCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
   
    public function userlistPage()
    {
        $user = Auth::user();
        $roleData = Role::all();
        $healthCenterData = HealthCenters::all();
        $assignedHealthCenterStaffData = AssignedHealthCenter::all();
        // $healthCenterData = DB::table('health_centers')->select('name','id')->orderBy('id')->get();
        return view('Admin.userList', ['user' => $user, 'roleData'=>$roleData,
        'healthCenterData'=>$healthCenterData, 'assignedHealthCenterStaffData'=>$assignedHealthCenterStaffData]);
    }


    public function store(Request $request)
    {
        $healthcenter = new User();
        $healthcenter->firstname = $request->firstname;
        $healthcenter->middlename = $request->middlename;
        $healthcenter->lastname = $request->lastname;
        $healthcenter->sex = $request->sex;
        $healthcenter->birthdate = $request->birthdate;
        $healthcenter->address = $request->address;
        $healthcenter->contact = $request->contact;
        $healthcenter->email = $request->email;
        $healthcenter->password = $request->password;
        $healthcenter->image = $request->image;
        $healthcenter->role = $request->role;
        $healthcenter->save();
        $healthcenter['password'] = Hash::make($healthcenter['password']);

        return redirect('/Admin/User_List')->with('success', 'Register successful');
    }

    public function userList()
    {
        $totalUser = User::count();
        $totalAdmin = User::all()->where('role',1)->count();
        $totalProgram = User::all()->where('role',2)->count();
        $totalDistrict = User::all()->where('role',4)->count();
        $totalHd = User::all()->where('role',3)->count();
        $totalHc= User::all()->where('role',5)->count();
        $totalSupplier= User::all()->where('role',6)->count();
        $user = Auth::user();
        $data = User::all();
        $roleData = Role::all();
        $healthCenterData = HealthCenters::all();
        $assignedHealthCenterStaffData = AssignedHealthCenter::all();
        // $healthCenterData = DB::table('health_centers')->select('name','id')->orderBy('id')->get();
        return view('Admin.userList', ['assignedHealthCenterStaffData'=> $assignedHealthCenterStaffData, 'healthCenterData'=>$healthCenterData, 'roleData'=>$roleData, 'users' => $data , 'totalUser' => $totalUser, 'totalAdmin'=>$totalAdmin, 'totalProgram'=>$totalProgram, 'totalDistrict'=>$totalDistrict,'totalHd'=>$totalHd, 'totalHc'=> $totalHc , 'totalSupplier'=>$totalSupplier], ['user' => $user]);
    }

    public function LoginProcess(Request $request)
{
    $validated = $request->validate([
        "email" => ['required', 'email'],
        "password" => 'required',
    ]);

    if (Auth::attempt($validated)) {
        $user = Auth::user();

        switch ($user->role) {
            case 1:
                return redirect('/Admin/Dashboard')->with('success', 'Login successful!');
                break;

            case 2:
                return redirect('/Program_Manager/Dashboard')->with('success', 'Login successful!');
                break;

            case 3:
                return redirect('/Health_Department/Dashboard')->with('success', 'Login successful!');
                break;

            case 4:
                return redirect('/District/Dashboard')->with('success', 'Login successful!');
                break;

            case 5:
                return redirect('/Health_Center/Dashboard')->with('success', 'Login successful!');
                break;

            case 6:
                return redirect('/Supplier/Dashboard')->with('success', 'Login successful!');
                break;

            default:
                // Handle other roles or redirect as needed
                // You might want to redirect to a different page or show an error message
                Auth::logout(); // Log out user
                return back()->withErrors(['email' => 'Invalid email or password']);
                break;
        }
    } else {
        // Authentication failed, return to login with an error message
        return back()->with(['error' => 'Invalid email or password']);
    }
}

    

    public function logout(Request $request)
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('');
    }

    public function changePassword(Request $request)
    {
        return view('users.change-password');
    }

    public function ChangePasswordSave(Request $request)
    {
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required|min:6|different:currentPassword',
            'confirmNewPassword' => 'required|same:newPassword',
        ]);

        $auth = Auth::user();

        // The passwords matches
        if (!Hash::check($request->get('currentPassword'), $auth->password)) {
            return back()->with('error', "Current Password is Invalid");
        }

        $user =  User::find($auth->id);
        $user->password =  Hash::make($request->newPassword);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
    }
    
}

    

