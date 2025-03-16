<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function loginindex(){
        return view("backend.auth.login");
    }

    public function login(Request $request){
        $request->validate([
            "email"=>"required|email",
            "password"=>"required|min:8"
        ]);
        $auth = Auth::attempt([
            "email"=>$request->email,
            "password"=>$request->password
        ]);
        if($auth){
           return redirect()->route('admin.dashboard.index');   
        }
        else{
            session()->flash("message","invalid Credentials");
            return back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('homepage');
    }
}
