<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // Import the Carbon class if you haven't done it already

    public function store(Request $request)
{
    $pengaduanId = $request->pengaduan_id;
    $petugasId = Auth::user()->id;
    $tglTanggapan = Carbon::now();

    $tanggapan = Tanggapan::where('pengaduan_id', $pengaduanId)->first();

    $request->validate([
        'tanggapan' => 'required', // Validasi bahwa tanggapan tidak boleh kosong
    ]);

    if ($tanggapan) {
        $tanggapan->update([
            'tanggapan' => $request->tanggapan,
            'petugas_id' => $petugasId,
            'tgl_tanggapan' => $tglTanggapan,
        ]);
        Alert::success('Berhasil', 'Tanggapan berhasil diperbarui');
    } else {
        $data = [
            'pengaduan_id' => $pengaduanId,
            'tanggapan' => $request->tanggapan,
            'petugas_id' => $petugasId,
            'tgl_tanggapan' => $tglTanggapan,
        ];

        Tanggapan::create($data);
        Alert::success('Berhasil', 'Tanggapan berhasil ditambahkan');
    }

    $pengaduan = Pengaduan::findOrFail($pengaduanId);
    $pengaduan->status = $request->status;
    $pengaduan->save();

    return redirect()->route('admin.pengaduan', $pengaduan)->with('status', 'Tanggapan dan status berhasil diperbarui');
}

    

    
    

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Pengaduan::with([
            'details', 'user',
        ])->findOrFail($id);

        return view('admin.tanggapan', [
            'item' => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
