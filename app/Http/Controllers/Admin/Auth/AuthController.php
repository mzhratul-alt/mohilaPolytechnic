<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Login Page
    public function login_index()
    {
        return view('admins.auth.admin_login');
    }

    //Login Check

    public function login(Request $request)
    {


        $credential= $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]
        );





        if(Auth::guard('admin')->attempt($credential)){
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        return back()->withErrors([
            'failed'=>'Your Credential did not match!!!'
        ]);
    }

    //Admin Dashboard

    public function dashboard(){
        return view('admins.dashboard');
    }

    //Admin Profile

    public function profile(){
        return view('admins.profile');
    }

    //Admin Logout

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login.index');

    }
}
