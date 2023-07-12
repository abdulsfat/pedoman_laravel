<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

// Controller ini khusus hanya untuk user (tampilan depan)
class UserController extends Controller
{
    // untuk memanggil atau menampilkan halaman index (utama)

    public function index()
    {
        return view('user.home');
    }

    // untuk memanggil atau menampilkan halaman prosedur (tata cara)
    public function prosedur()
    {
        return view('user.prosedur');
    }

    // untuk memanggil atau menampilkan halaman kontak
    public function kontak()
    {
        return view('user.kontak');
    }

    // untuk memanggil atau menampilkan halaman pengaduan (core)
    public function pengaduan()
    {
        return view('user.pengaduan');
    }

    public function storePengaduan(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->back()->withInput()->withErrors(['pesan' => 'Login dibutuhkan!']);
        }

        $data = $request->all();

        $validate = Validator::make($data, [
            'judul' => ['required'],
            'deskripsi' => ['required'],
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate);
        }

        date_default_timezone_set('Asia/Bangkok');

      if ($request->hasFile('foto')) {
    $foto = $request->file('foto')->store('assets/laporan', 'public');
} else {
    $foto = null;
}

$pengaduan = Pengaduan::create([
    'tgl_pengaduan' => date('Y-m-d H:i:s'),
    'user_id' => auth()->id(),
    'judul' => $request->judul,
    'deskripsi' => $request->deskripsi,
    'foto' => $foto,
    'status' => 'pending',
]);

        if ($pengaduan) {
            return redirect()->route('depan.laporan', 'me')->with(['success' => 'Berhasil terkirim!', 'type' => 'success']);
        } else {
            return redirect()->back()->with(['error' => 'Gagal terkirim!', 'type' => 'danger']);
        }
        
    }

    public function laporan($siapa = '')
    {
        $user_id = auth()->id();

        $terverifikasi = Pengaduan::where([['user_id', $user_id], ['status', '!=', '0']])->count();
        $proses = Pengaduan::where([['user_id', $user_id], ['status', 'proses']])->count();
        $selesai = Pengaduan::where([['user_id', $user_id], ['status', 'selesai']])->count();

        $hitung = [$terverifikasi, $proses, $selesai];

        if ($siapa == 'me') {
            $user_id = auth()->user()->user_id;

            $pengaduan = Pengaduan::where('user_id', $user_id)->orderBy('tgl_pengaduan', 'desc')->get();

            return view('user.laporan', compact('pengaduan', 'hitung', 'siapa'));
        } else {
            $user_id = auth()->user()->user_id;

            $pengaduan = Pengaduan::where([
                ['user_id', '!=', $user_id],
                ['status', '!=', '0'],
            ])->orderBy('tgl_pengaduan', 'desc')->get();

            return view('user.laporan', compact('pengaduan', 'hitung', 'siapa'));
        }

    }


}

