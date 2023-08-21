<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratMasuk;

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
        return view('dashboard.arsip-surat.surat-masuk.surat-masuk-create', [
            'title' => "Tambah Surat Masuk",
           
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //  dd($request);
    SuratMasuk::create($request->all());
    return back();
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
        return 'halaman edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratMasuk $SuratMasuk)
    {
        //
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
