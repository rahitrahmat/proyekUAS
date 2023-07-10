<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Makul;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::count();
        $dosen = Dosen::count();
        $makul = Makul::count();

        return view('dashboard', compact('mahasiswa', 'dosen', 'makul'));
    }
}
