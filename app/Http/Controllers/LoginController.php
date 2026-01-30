<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credential = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $rememberme = $request->filled('rememberme');

        if(Auth::attempt($credential, $rememberme)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'username' => 'yang anda inputkan salah/tidak terdaftar',
        ])->onlyInput('username');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
