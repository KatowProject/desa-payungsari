<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanKades extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_kades';

    protected $fillable = ['judul', 'isi', 'keterangan'];

    public function photos()
    {
        return $this->hasMany(KegiatanPhoto::class);
    }
}
