<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use PDF;


class AdminController extends Controller
{
    public function __invoke()
    {
        
    }

    public function index($id) {

        $item = Pengaduan::with([
            'details', 'user' 
        ])->findOrFail($id);

        return view('pages.admin.tanggapan.add',[
        'item' => $item
        ]);
    }

    public function mahasiswa() {

        $data = DB::table('users')->where('role','=', 'mahasiswa')->get();

        return view('admin.mahasiswa', [
            'data' => $data
        ]);
    }

    public function laporan() {

        $pengaduan = Pengaduan::all();

        return view('admin.laporan',[
            'pengaduan' => $pengaduan
        ]);
    }

//     public function cetak() {

//         $pengaduan = Pengaduan::all();

//         $pdf = PDF::loadview('pages.admin.pengaduan',[
//             'pengaduan' => $pengaduan
//         ]);
//         return $pdf->download('laporan.pdf');
//     }

//     public function pdf($id) {

//         $pengaduan = Pengaduan::find($id);

//         $pdf = PDF::loadview('pages.admin.pengaduan.cetak', compact('pengaduan'))->setPaper('a4');
//         return $pdf->download('laporan-pengaduan.pdf');
//     }
}