<?php

namespace App\Http\Controllers;

use App\Models\KegiatanKades;
use App\Models\KegiatanPhoto;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function pengaduan_masyarakat()
    {
        return view('blog.postingan.pengaduan-masyarakat',[
            'title' => 'Kegiatan Desa Payungsari',
        ]);
    }
    

    public function pengaduan_store(Request $request){
        $validated = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'keterangan' => 'required',
            'foto_pengaduan' => 'required',
        ]);
        Pengaduan::create($validated);
        return redirect('/pengaduan-masyarakat');
    }
    
    
    

}
