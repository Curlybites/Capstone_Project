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
        return view('Admin.userList');
    }

    public function createUserPage(){
        return view('Admin.createUser');
    }


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
        $data = User::paginate(10);
        return view('Admin.userList',['users'=>$data]);
    }   



    public function LoginProcess(Request $request){
        $validated = $request->validate([
            "email"=> ['required','email'],
            "password" => 'required',
        ]);
        if(auth()-> attempt($validated)){
                $request->session()->regenerate();
                return redirect('/Admin/Dashboard');
        }
    }



}
