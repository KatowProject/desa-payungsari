<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use Illuminate\Support\Facades\Storage;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.arsip-surat.surat-keluar.surat-keluar-index', [
            'title'  =>  'Surat Keluar',
            'data'   =>   SuratKeluar::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jumlah_data = SuratKeluar::count();
        $jumlah_data++;
        $hasil = sprintf("%03s", $jumlah_data);
        return view('dashboard.arsip-surat.surat-keluar.surat-keluar-create', [
            'title'          =>  'Surat Keluar Create',
            'nomor_urut' => $hasil
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nomor_urut'       => 'required',
            'nomor_surat'      => '',
            'tanggal_surat'    => '',
            'tanggal_dikirim' => '',
            'perihal_surat'    => '',
            'jenis_surat'      => '',
            'sifat_surat'      => '',
            'tujuan_surat'       => '',
        ]);
        if ($request->file('file_surat')) {
            $validated['file_surat'] = $request->file('file_surat')->storePublicly('surat_keluar');
        }
        SuratKeluar::create($validated);
        return back()->with('surat_keluar_create', 'success');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(SuratKeluar $SuratKeluar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SuratKeluar $SuratKeluar)
    {
        return view('dashboard.arsip-surat.surat-keluar.surat-keluar-edit', [
            'title'          =>  'Surat Keluar Edit',
            'data' => $SuratKeluar
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratKeluar $SuratKeluar)
    {
        //
        $validated = $request->validate([
            'nomor_urut'       => 'required',
            'nomor_surat'      => '',
            'tanggal_surat'    => '',
            'tanggal_dikirim' => '',
            'perihal_surat'    => '',
            'jenis_surat'      => '',
            'sifat_surat'      => '',
            'tujuan_surat'       => '',
        ]);
        if ($request->file('file_surat')) {
            Storage::delete($SuratKeluar->file_surat);
            $validated['file_surat'] = $request->file('file_surat')->storePublicly('surat_Keluar');
            }else{ 
            $validated['file_surat'] = $SuratKeluar->file_surat;
            }
        SuratKeluar::where('id',$SuratKeluar->id)
        ->update($validated);
        return back()->with('surat_Keluar_update', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratKeluar $SuratKeluar)
    {
        //
        SuratKeluar::destroy($SuratKeluar->id);
        return back()->with('surat_masuk_destroy', 'berhasil');
    }
}
