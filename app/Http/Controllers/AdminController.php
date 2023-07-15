<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $users = User::all();
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
        return redirect('admin/petugas');
    }

    public function laporan()
    {

        $pengaduan = Pengaduan::all();

        return view('admin.laporan', [
            'pengaduan' => $pengaduan,
        ]);
    }

    // public function cetak()
    // {

    //     $pengaduan = Pengaduan::all();

    //     $pdf = FacadePdf::loadview('admin.pengaduan', [
    //         'pengaduan' => $pengaduan,
    //     ]);
    //     return $pdf->download('laporan.pdf');
    // }

    // public function pdf($id)
    // {

    //     $pengaduan = Pengaduan::find($id);

    //     $pdf = FacadePdf::loadview('admin.pengaduan.cetak', compact('pengaduan'))->setPaper('a4');
    //     return $pdf->download('laporan-pengaduan.pdf');
    // }

    public function destroy($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
    
        $user->tanggapan()->delete();
    
        // Hapus user
        $user->delete();
    
        return redirect()->back()->with('success', 'Deleted successfully');
    }

}
