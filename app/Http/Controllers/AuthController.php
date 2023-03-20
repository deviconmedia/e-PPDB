<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email'         => 'required|email',
            'password'      => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            //cek role_id
            if (auth()->user()->role === 'admin') {
                return redirect()->route('admin.index');
            } elseif (auth()->user()->role === 'siswa') {
                return redirect()->route('siswa.index');
            } elseif (auth()->user()->role === 'guest') {
                return redirect()->route('guest.index');
            }
        }else{
            return redirect()->back()->with('error', 'Oppss! Email atau Password salah.');
        }
    }
    public function register()
    {
        return view('auth.register');
    }

    public function doRegister(Request $request)
    {
        $validatedData = $request->validate([
            'fname'                 => 'required',
            'email'                 => 'required|email|unique:users',
            'password'              => 'required|min:3',
            'passConf'              => 'required|same:password',
        ]);
        User::create([
            'role'      => 'guest',
            'name'      => $request->fname,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
        ]);
        return redirect()->route('auth.login')->with('success', 'Berhasil mendaftar, silahkan login.');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('ppdb.index');
    }
}
