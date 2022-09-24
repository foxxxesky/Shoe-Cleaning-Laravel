<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authentication extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('pages.home', ['pages' => 'Home'], compact('products'));
    }

    public function registerPage()
    {
        return view('pages.login&register.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:dns|unique:users',
            'no_hp' => 'required',
            'password' => 'required|confirmed',
            'setujukebijakan' => 'accepted'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/Login')->with('success', 'Registrasi Berhasil Silahkan Login');
    }

    public function loginPage()
    {
        return view('pages.login&register.login', ['pages' => 'Home']);
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            if (auth()->user()->is_admin == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/HomeAdmin')->with('loginAdmin', 'Berhasil Login Sebagai Admin');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/Home');
            }
        } else {
            return back()->with('loginError', 'Gagal Login Email atau Password Salah!');
        }

        // dd(Auth::attempt(['email' => $request->email, 'password' => $request->password]));
        
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}