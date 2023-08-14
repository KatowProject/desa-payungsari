<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class SuratController extends Controller
{

    public function buatsurat()
    {
        return view('dashboard.buat_surat_manual', [
            'title'     =>  'Pembuatan Surat',

        ]);
    }

    public function skdd(Request $request)
    {
    
        $pdf = PDF::loadView('dashboard.formatsurat.skdd', ['q' => $request]);
        return $pdf->stream();
    }

    public function sku(Request $request)
    {
    
        $pdf = PDF::loadView('dashboard.formatsurat.sku', ['q' => $request]);
        return $pdf->stream();
    }

    public function coba(Request $request)
    {
    
        $pdf = PDF::loadView('dashboard.formatsurat.new_surat', ['q' => $request]);
        return $pdf->stream();
    }

}

