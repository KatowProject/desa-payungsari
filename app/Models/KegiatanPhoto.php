<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanPhoto extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_photos';

    protected $fillable = ['kegiatan_kades_id', 'photo_path'];

    public function kadesActivity()
    {
        return $this->belongsTo(KegiatanKades::class);
    }
}
