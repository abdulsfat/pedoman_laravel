<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $table = 'tanggapan';
    protected $primaryKey = 'tanggapan_id';
    protected $fillable = [
        'pengaduan_id',
        'tgl_tanggapan',
        'tanggapan',
        'petugas_id',
    ];

}
