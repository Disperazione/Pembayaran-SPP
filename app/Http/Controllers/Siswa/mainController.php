<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function dashboard()
    {
        return view('siswa.dashboard');
    }
    public function transaksi()
    {
        return view('siswa.transaksi');
    }
    public function history()
    {
        return view('siswa.history');
    }
}
