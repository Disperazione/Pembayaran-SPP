<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function Login()
    {
        return view('auth.login');
    }
}