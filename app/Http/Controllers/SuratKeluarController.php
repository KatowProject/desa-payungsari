<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;

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
        return view('dashboard.arsip-surat.surat-keluar.surat-keluar-create', [
            'title'          =>  'Surat Keluar Create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SuratKeluar $SuratKeluar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SuratKeluar $SuratKeluar)
    {
        //
    }
}
