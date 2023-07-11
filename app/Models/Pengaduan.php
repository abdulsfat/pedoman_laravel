<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    /**
     *
     *
     * @var string
     */
    protected $table = 'pengaduan';

    /**
     *
     * @var array
     */
    protected $fillable = [
        'pengaduan_id',
        'tgl_pengaduan',
        'nim',
        'user_id',
        'judul',
        'deskripsi',
        'foto',
        'status',
    ];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }

}
