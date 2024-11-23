<?php

namespace App\Http\Controllers;

use App\Models\adminModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function register() 
    {
        $title = 'Daftar Akun Admin';
        return view('content.auth.register', compact('title'));
    }

    function submitRegistrasi(Request $request)
    {
        $admin = new adminModels();
        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->save();
        // dd($admin);
        return redirect()->route('login');
    }

    function login() 
    {
        $title = 'Login Admin';
        return view('content.auth.login', compact('title'));
    }

    public function submitLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Pastikan menggunakan guard admin untuk login
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate(); // Regenerasi session untuk keamanan
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->with('failed', 'Email atau Password Salah');
        }
    }

    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
    
}
