<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KegiatanKades;
use App\Models\KegiatanPhoto;

class KegiatanKadesController extends Controller
{
    public function kegiatan_kades()
    {
        $kegiatan = KegiatanKades::all();
        $photos = KegiatanPhoto::all();

        return view('dashboard.kegiatan-kades.kegiatan-kades-index', compact('kegiatan', 'photos'), [
            'title' => 'Kegiatan Desa Payungsari',
        ]);
    }

    public function create_kegiatan_kades()
    {
        return view('dashboard.kegiatan-kades.create-kegiatan-kades', [
            'title' => 'Kegiatan Desa Payungsari',
        ]);
    }


    public function kades_store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'keterangan' => 'required|string',
            'photo_path.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $activity = KegiatanKades::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'keterangan' => $request->keterangan
        ]);

        if ($request->hasFile('photo_path')) {
            foreach ($request->file('photo_path') as $file) {
                $path = $file->store('kegiatan_photos', 'public');

                KegiatanPhoto::create([
                    'kegiatan_kades_id' => $activity->id,
                    'photo_path' => $path
                ]);
            }
        }
        return redirect('kegiatan-kades');
    }
}
