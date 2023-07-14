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
        return $this->hasOne(Pengaduan::class, 'id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function email()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function details()
    {
        return $this->hasMany(Pengaduan::class, 'id', 'id');
    }
    protected $casts = [
        'status' => 'string',
    ];

    public const STATUS_PENDING = 'pending';
    public const STATUS_DIPROSES = 'diproses';
    public const STATUS_SELESAI = 'selesai';

    public static function getStatusOptions()
    {
        return [
            self::STATUS_PENDING => 'Pending',
            self::STATUS_DIPROSES => 'Diproses',
            self::STATUS_SELESAI => 'Selesai',
        ];
    }

}
