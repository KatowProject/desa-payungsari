<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengaduanMasrayakatController extends Controller
{
    public function pengaduan_masyarakat()
    {
        $pengaduan = Pengaduan::all();
        return view('dashboard.pengaduan-masyarakat.main', compact('pengaduan'), [
            'title' => 'Pengaduan Masyarakat',
        ]);
    }

    public function create_pengaduan_masyarakat()
    {
        return view('dashboard.pengaduan-masyarakat.create', [
            'title' => 'Buat Pengaduan Masyarakat',
        ]);
    }

    public function pengaduan_store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'keterangan' => 'required|string',
            'photo_path.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $pengaduan = Pengaduan::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'keterangan' => $request->keterangan,
            'foto_pengaduan' => '[]'
        ]);

        if ($request->hasFile('foto_pengaduan')) {
            $photos = [];
            foreach ($request->file('foto_pengaduan') as $file) {
                $path = $file->store('pengaduan_photos', 'public');

                $photos[] = $path;
            }

            // convert to json and update
            $pengaduan->foto_pengaduan = json_encode($photos);

            // update
            $pengaduan->save();
        }

        return redirect('pengaduan-masyarakat')->with('success', 'Pengaduan berhasil ditambahkan');
    }

    public function detail_pengaduan_masyarakat(Request $request, $id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('dashboard.pengaduan-masyarakat.detail', compact('pengaduan'), [
            'title' => 'Detail Pengaduan Masyarakat',
        ]);
    }

    public function edit_pengaduan_masyarakat(Request $request, $id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('dashboard.pengaduan-masyarakat.edit', compact('pengaduan'), [
            'title' => 'Edit Pengaduan Masyarakat',
        ]);
    }

    public function update_pengaduan_masyarakat(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'keterangan' => 'required|string',
            'photo_path.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $pengaduan = Pengaduan::find($id);
        $pengaduan->judul = $request->judul;
        $pengaduan->isi = $request->isi;
        $pengaduan->keterangan = $request->keterangan;

        if ($request->hasFile('foto_pengaduan')) {
            $photos = [];
            foreach ($request->file('foto_pengaduan') as $file) {
                $path = $file->store('pengaduan_photos', 'public');

                $photos[] = $path;
            }

            // convert to json and update
            $pengaduan->foto_pengaduan = json_encode($photos);
        }

        // update
        $pengaduan->save();

        return redirect('pengaduan-masyarakat')->with('success', 'Pengaduan berhasil diupdate');
    }

    public function delete_pengaduan_masyarakat(Request $request, $id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();

        // delete photos
        $photos = json_decode($pengaduan->foto_pengaduan);
        foreach ($photos as $photo) {
            Storage::disk('public')->delete($photo);
        }

        return redirect('pengaduan-masyarakat')->with('success', 'Pengaduan berhasil dihapus');
    }

    ///

    public function pengaduan_masyarakat_public()
    {
        $pengaduan = Pengaduan::all();
        return view('blog.postingan.pengaduan-masyarakat', compact('pengaduan'), [
            'title' => 'Pengaduan Masyarakat',
        ]);
    }
}
