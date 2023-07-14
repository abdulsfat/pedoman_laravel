<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table = 'tanggapan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'pengaduan_id',
        'tgl_tanggapan',
        'tanggapan',
        'petugas_id',
    ];

    
    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'pengaduan_id');
    }
    public function petugas()
    {
        return $this->belongsTo(User::class, 'petugas_id');
    }
}
