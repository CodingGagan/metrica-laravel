<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class Auth extends Controller
{
    public function register_user(Request $request)
    {
        // $validated = $request->validate([
        //     // 'username' => 'required|unique:username',
        //     // 'email' => 'required|unique:email',
        //     'number' => 'required',
        // ]);
        $data = new Auth;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->phone = $request->number;
        // $data->save();
        return view('auth/login');
    }

    public function login_user(Request $request)
    {
        $password = $request->password;
        $user  = Auth::where('username', $request->username)->first();
        // echo "<pre>";
        // print_r($user);
        if (!empty($user)) {
            if (Hash::check($password, $user->password)) {
                Session::put('user', $user);
                session()->flash('message', 'Logged in successfully');
                return view('/');
            } else {
                session()->flash('error', 'Your password or email is incorrect');
                return view('auth/login');
            }
        } else {
            session()->flash('error', 'Please check your credentials');
            return redirect('/');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('login');
    }
}
