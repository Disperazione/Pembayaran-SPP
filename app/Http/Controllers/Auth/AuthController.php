<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authrequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Login()
    {
        return view('auth.login');
    }
    public function postLogin(Authrequest $request)
    {
        $request->validated(); // validasi
        // $remember = $request->remember == 'on' ? true : false; // rememberme
        if (Auth::guard('petugas')->attempt(['username' => $request->username, 'password' => $request->password]))
        {
            $level = Auth::guard('petugas')->user()->level;
            switch ($level) {
                case 'petugas':
                    $request->session()->regenerate();
                    return redirect('/petugas/dashboard');
                    break;
                case 'admin':
                    $request->session()->regenerate();
                    return redirect('/petugas/dashboard');
                    break;
            }
        }
        else if(Auth::guard('siswa')->attempt(['nisn' => $request->username, 'password' => $request->password]))
        {
            $request->session()->regenerate();
            return redirect('/siswa/dashboard');
        }
        else
        {
            return back()->withErrors([
                'username' => 'username anda salah',
                'password' => 'password anda salah'
            ]);
        }

    }
    public function logout()
    {
        Auth::logout();
        session()->flush();
        return redirect()->route('login');
    }
}
