<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Auth;

class AuthController extends Controller
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
        $username = $request->username;
        $password = $request->password;
        $user  = Auth::where('username', $username)->first();
        if (Hash::check($password, $user->password)) {
            session(['user' => $user]);
            return view('pages/index', ['admin' => $user]);
        } else {
            return view('auth/login');
        }
    }

    public function logout()
    {
        return view('auth/login');
    }
}
