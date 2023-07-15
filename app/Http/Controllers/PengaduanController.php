<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;


class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = Pengaduan::all();
        return view('admin.pengaduan', [
            'items' => $items,
        ]);

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $item = Pengaduan::with([
            'details', 'user',
        ])->findOrFail($id);

        $tangap = Tanggapan::where('pengaduan_id', $id)->first();

        return view('admin.detail', [
            'item' => $item,
            'tangap' => $tangap,
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

        // $status->update($data);
        // return redirect('admin/pengaduan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);
    
        if (!$pengaduan) {
            return redirect('admin/pengaduan')->with('toast_error', 'Pengaduan tidak ditemukan');
        }
    
        $pengaduan->tanggapan()->delete(); // Menghapus tanggapan terkait
        $pengaduan->delete(); // Menghapus pengaduan
    
        $title = 'Hapus Pengaduan!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
    
        return redirect('admin/pengaduan')->with('success', 'Pengaduan berhasil dihapus');
    }
    
}
    

