<?php

namespace App\Http\Controllers;


use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'pengaduan' => Pengaduan::count(),
            'mahasiswa' => User::where('role', '=', 'mahasiswa')->count(),
            'petugas' => User::where('role', '=', 'petugas')->count(),
            'admin' => User::where('role', '=', 'admin')->count(),
            'tanggapan' => Tanggapan::count(),
            'pending' => Pengaduan::where('status', 'pending')->count(),
            'proses' => Pengaduan::where('status', 'diproses')->count(),
            'selesai' => Pengaduan::where('status', 'selesai')->count(),
        ]);
    }
}
