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
        foreach ($kegiatan as $key => $value) {
            $value->photos();
        }

        return view('dashboard.kegiatan-kades.kegiatan-kades-index', compact('kegiatan'), [
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
        return redirect('kegiatan-kades')->with('success', 'Kegiatan berhasil ditambahkan');
    }

    public function detail_kegiatan_kades(Request $request, $id)
    {
        $m_kegiatan_kades = new KegiatanKades();

        $kegiatan = KegiatanKades::find($id);
        $kegiatan->photos;

        $kegiatan = $kegiatan->toArray();

        return view('dashboard.kegiatan-kades.detail-kegiatan-kades', compact('kegiatan'), [
            'title' => 'Kegiatan Desa Payungsari',
        ]);
    }

    public function edit_view_kegiatan_kades(Request $request, $id)
    {
        $m_kegiatan_kades = new KegiatanKades();

        $kegiatan = KegiatanKades::find($id)->toArray();

        return view('dashboard.kegiatan-kades.edit-kegiatan-kades', compact('kegiatan'), [
            'title' => 'Kegiatan Desa Payungsari',
        ]);
    }

    public function kades_update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'keterangan' => 'required|string',
            'photo_path.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $activity = KegiatanKades::find($id);
        $activity->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'keterangan' => $request->keterangan
        ]);

        if ($request->hasFile('photo_path')) {
            $photos = KegiatanPhoto::where('kegiatan_kades_id', $id)->get();

            foreach ($request->file('photo_path') as $file) {
                $path = $file->store('kegiatan_photos', 'public');

                KegiatanPhoto::create([
                    'kegiatan_kades_id' => $activity->id,
                    'photo_path' => $path
                ]);
            }

            foreach ($photos as $photo) {
                $photo->delete();
            }
        }

        return redirect()->route('kegiatan-kades')->with('success', 'Kegiatan berhasil diubah');
    }

    public function kades_delete($id)
    {
        $activity = KegiatanKades::find($id);

        $activity->delete();

        return redirect()->route('kegiatan-kades')->with('success', 'Kegiatan berhasil dihapus');
    }
}
