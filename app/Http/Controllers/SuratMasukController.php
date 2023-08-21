<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use Illuminate\Support\Facades\Storage;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.arsip-surat.surat-masuk.surat-masuk-index', [
            'title' => "Surat Masuk",
            'data' => SuratMasuk::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jumlah_data = SuratMasuk::count();
        $jumlah_data++;
        $hasil = sprintf("%03s", $jumlah_data);
        return view('dashboard.arsip-surat.surat-masuk.surat-masuk-create', [
            'title' => "Tambah Surat Masuk",
            'nomor_urut' => $hasil
           
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //  dd($request);
    $validated = $request->validate([
        'nomor_urut'       => 'required',
        'nomor_surat'      => '',
        'tanggal_surat'    => '',
        'tanggal_diterima' => '',
        'perihal_surat'    => '',
        'jenis_surat'      => '',
        'sifat_surat'      => '',
        'asal_surat'       => '',
    ]);
    if ($request->file('file_surat')) {
        $validated['file_surat'] = $request->file('file_surat')->storePublicly('surat_masuk');
    }
    SuratMasuk::create($validated);
    return back()->with('surat_masuk_create', 'success');

    }

    /**
     * Display the specified resource.
     */
    public function show(SuratMasuk $SuratMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuratMasuk $SuratMasuk)
    {
        return view('dashboard.arsip-surat.surat-masuk.surat-masuk-edit', [
            'title' => 'Edit Surat Masuk',
            'data' => $SuratMasuk,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratMasuk $SuratMasuk)
    {
        $validated = $request->validate([
            'nomor_urut'       => 'required',
            'nomor_surat'      => '',
            'tanggal_surat'    => '',
            'tanggal_diterima' => '',
            'perihal_surat'    => '',
            'jenis_surat'      => '',
            'sifat_surat'      => '',
            'asal_surat'       => '',
        ]);
        if ($request->file('file_surat')) {
            Storage::delete($SuratMasuk->file_surat);
            $validated['file_surat'] = $request->file('file_surat')->storePublicly('surat_masuk');
            }else{
            $validated['file_surat'] = $SuratMasuk->file_surat;
            }
        SuratMasuk::where('id',$SuratMasuk->id)
        ->update($validated);
        return back()->with('surat_masuk_update', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratMasuk $SuratMasuk)
    {
        SuratMasuk::destroy($SuratMasuk->id);
        return back()->with('surat_masuk_destroy', 'berhasil');
    }
}
