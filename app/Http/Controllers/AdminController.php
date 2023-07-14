<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function __invoke()
    {

    }

    public function index($id)
    {

        $item = Pengaduan::with([
            'details', 'user',
        ])->findOrFail($id);

        return view('tanggapan.add', [
            'item' => $item,
        ]);
    }

    public function mahasiswa()
    {

        $data = DB::table('users')->where('role', '=', 'mahasiswa')->get();

        return view('admin.mahasiswa', [
            'data' => $data,
        ]);
    }
    public function petugas()
    {
        $data = User::whereIn('role', ['petugas', 'admin'])->get();
    
        return view('admin.petugas', [
            'data' => $data,
        ]);
    }

    public function create()
    {
        return view('admin.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        Alert::success('Berhasil', 'Petugas baru ditambahkan');
        return redirect('admin/petugas');
    }

    public function laporan()
    {

        $pengaduan = Pengaduan::all();

        return view('admin.laporan', [
            'pengaduan' => $pengaduan,
        ]);
    }

    public function cetak()
    {

        $pengaduan = Pengaduan::all();

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadview('admin.pengaduan', [
            'pengaduan' => $pengaduan,
        ]);
        return $pdf->download('laporan.pdf');
    }

    public function pdf($id)
    {

        $pengaduan = Pengaduan::find($id);

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadview('admin.cetak', compact('pengaduan'))->setPaper('a4');
        return $pdf->download('laporan-pengaduan.pdf');
    }
}
