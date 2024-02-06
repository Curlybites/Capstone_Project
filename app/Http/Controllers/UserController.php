<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   
    public function userlistPage()
    {
        $user = Auth::user();
       
        return view('Admin.userList', ['user' => $user]);
    }

    // public function createUserPage(){
    //     return view('Admin.createUser');
    // }

    public function store(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            "firstname" => ['required'],
            "middlename" => ['required'],
            "lastname" => ['required'],
            "sex" => ['required'],
            "birthdate" => ['required'],
            "address" => ['required'],
            "contact" => ['required'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:6',
            "image",
            "role" => ['required'],
        ]);

        // @dd($request);
        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        return redirect('/Admin/User_List')->with('message', 'Register successful');
    }

    public function userList()
    {
        $totalUser = User::count();
        $user = Auth::user();
        $data = User::all();
        return view('Admin.userList', ['users' => $data , 'totalUser' => $totalUser], ['user' => $user]);
    }


    // public function LoginProcess(Request $request){
    //     $validated = $request->validate([
    //         "email"=> ['required','email'],
    //         "password" => 'required',
    //     ]);
    //     if(auth()-> attempt($validated)){
    //             $request->session()->regenerate();
    //             return redirect('/Admin/Dashboard');
    //     }
    // }

    public function LoginProcess(Request $request)
    {
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => 'required',
        ]);

        if (auth()->attempt($validated)) {
            $userRole = auth()->user()->role;

            switch ($userRole) {
                case 1:
                    $request->session()->regenerate();
                    return redirect('/Admin/Dashboard')->with('success', 'Login successful!');
                    break;

                case 2:
                    $request->session()->regenerate();
                    return redirect('/Program_Manager/Dashboard')->with('success', 'Login successful!');
                    break;

                case 3:
                    $request->session()->regenerate();
                    return redirect('/Health_Department/Dashboard')->with('success', 'Login successful!');
                    break;

                case 4:
                    $request->session()->regenerate();
                    return redirect('District/Dashboard')->with('success', 'Login successful!');
                    break;

                case 5:
                    $request->session()->regenerate();
                    return redirect('Health_Center/Dashboard')->with('success', 'Login successful!');
                    break;

                case 6:
                    $request->session()->regenerate();
                    return redirect('Supplier/Dashboard')->with('success', 'Login successful!');
                    break;

                case 6:
                    $request->session()->regenerate();
                    return redirect('Supplier/Dashboard')->with('success', 'Login successful!');
                    break;

                default:
                    // Handle other roles or redirect as needed
                    // You might want to redirect to a different page or show an error message
                    return back()->withErrors(['email' => 'invalid email or password']);
                    break;
            }
        } else {
            // Authentication failed, return to login with an error message
            return back()->withErrors(['email' => 'invalid email or password']);
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }


    // public function LoginProcess(Request $request){
    //     $validated = $request->validate([
    //         "email"=> ['required','email'],
    //         "password" => 'required',
    //     ]);
    //     if (auth()->attempt($validated)) {
    //         // Authentication successful
    //         $userRole = auth()->user()->role;

    //         if ($userRole == 1) {
    //             $request->session()->regenerate();
    //             return redirect('/Admin/Dashboard');
    //         } else {
    //             // Handle other roles or redirect as needed
    //             // You might want to redirect to a different page or show an error message
    //             return redirect('/')->with('error', 'Unauthorized access');
    //         }
    //     } else {
    //         // Authentication failed, return to login with an error message
    //         return redirect('/')->with('error', 'Invalid credentials');
    //     }
    // }

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

    

        // In a controller
    // public function index(Request $request)
    // {
    //     $validated = $request->validate([
    //                 "email"=> ['required','email'],
    //                 "password" => 'required',
    //             ]);

    //     if (auth()->user()->role == User::ROLE_ADMIN) {
    //         // Logic for admin
    //     } elseif (auth()->user()->role == User::ROLE_HEALTH_DEPARTMENT) {
    //         // Logic for manager
    //     } elseif (auth()->user()->role == User::ROLE_PROGRAM_MANAGER) {

    //     } elseif (auth()->user()->role == User::ROLE_DISTRICT_SUPERVISOR) {

    //     } elseif (auth()->user()->role == User::ROLE_HEALTH_CENTER) {
    //        // Logic for user
    //     } else {
    //         // Logic for guest
    //     }

    //     // ...
    // }
