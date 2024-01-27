<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userlistPage(){
        $user = Auth::user();
        return view('Admin.userList',['user' => $user]);
    }

    // public function createUserPage(){
    //     return view('Admin.createUser');
    // }


    public function store(Request $request){
        // dd($request);
        $validated = $request->validate([
            "firstname"=> ['required'],
            "middlename"=> ['required'],
            "lastname"=> ['required'],
            "sex"=> ['required'],
            "birthdate"=> ['required'],
            "address"=> ['required'],
            "contact"=> ['required'],
            "email"=> ['required','email',Rule::unique('users','email')],
            "password" => 'required|confirmed|min:6',
            "image",
            "role"=>['required'],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        return redirect('/Admin/User_List')->with('message','Register successful');
    }

    public function userList(){
        $user = Auth::user();
        $data = User::all();
        return view('Admin.userList',['users'=>$data],['user' => $user]);
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
                    return redirect('/Admin/Dashboard');
                    break;
    
                case 2:
                    $request->session()->regenerate();
                    return redirect('/Program_Manager/Dashboard');
                    break;
    
                case 3:
                    $request->session()->regenerate();
                    return redirect('/Health_Department/Dashboard');
                    break;

                case 4:
                    $request->session()->regenerate();
                    return redirect('District/Dashboard');
                    break;

                case 5:
                    $request->session()->regenerate();
                    return redirect('Health_Center/Dashboard');
                    break;
    
                default:
                    // Handle other roles or redirect as needed
                    // You might want to redirect to a different page or show an error message
                    return back()->withErrors(['email'=> 'invalid email or password']);
                    break;
            }
        } else {
            // Authentication failed, return to login with an error message
       return back()->withErrors(['email'=> 'invalid email or password']);
        }
    }
    
    public function logout(Request $request){
       auth()->logout();
       request()->session()->invalidate();
       request()->session()->regenerateToken();
       return redirect('/');
    }

    public function editUser($id){
        $user = User::findOrFail($id);
        return view('');

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




