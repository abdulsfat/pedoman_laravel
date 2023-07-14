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
            'deskripsi' => ['required'],
        ]);

        $validate = Validator::make($data, [
            'deskripsi' => ['required'],
            'foto' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Batasan jenis file dan ukuran file
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withInput()->withErrors($validate);
        }

        if ($request->file('foto')) {
            $data['foto'] = $request->file('foto')->store('assets/pengaduan', 'public');
        }

        date_default_timezone_set('Asia/Bangkok');

        $pengaduan = Pengaduan::create([
            'tgl_pengaduan' => date('Y-m-d H:i:s'),
            'user_id' => auth()->id(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'foto' => $data['foto'] ?? '',
            'status' => 'pending',
        ]);

        if ($pengaduan) {
            return redirect()->route('depan.laporan', 'me')->with(['pengaduan' => 'Berhasil terkirim!', 'type' => 'success']);
        } else {
            return redirect()->back()->with(['pengaduan' => 'Gagal terkirim!', 'type' => 'danger']);
        }
    }

    public function laporan($siapa = '')
    {
        $user_id = auth()->id();

        $terverifikasi = Pengaduan::where([['user_id', $user_id], ['status', '!=', '']])->count();
        $proses = Pengaduan::where([['user_id', $user_id], ['status', 'proses']])->count();
        $selesai = Pengaduan::where([['user_id', $user_id], ['status', 'selesai']])->count();

        $hitung = [$terverifikasi, $proses, $selesai];

        if ($siapa == 'me') {
            $user_id = auth()->user()->user_id;

            $pengaduan = Pengaduan::where('user_id', $user_id)->orderBy('tgl_pengaduan', 'desc')->get();

            return view('user.laporan', ['pengaduan' => $pengaduan, 'hitung' => $hitung, 'siapa' => $siapa]);;
        } else {
            $user_id = auth()->user()->user_id;

            $pengaduan = Pengaduan::where([
                ['user_id', '!=', $user_id],
                ['status', '!=', '0'],
            ])->orderBy('tgl_pengaduan', 'desc')->get();

            return view('user.laporan', ['pengaduan' => $pengaduan, 'hitung' => $hitung, 'siapa' => $siapa]);
        }

    }

}
