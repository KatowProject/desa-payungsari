<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use PDF;

class SuratController extends Controller
{

    public function buatsurat()
    {
        return view('dashboard.buat_surat_manual', [
            'title'     =>  'Pembuatan Surat',
            'pegawai' => Pegawai::all()

        ]);
    }

    public function skdd(Request $request)
    {
        $penandatangan = explode(' - ',$request->penandatangan);
        // dd($penandatangan);
        $pdf = PDF::loadView('dashboard.formatsurat.skdd', ['q' => $request, 'pegawai' => $penandatangan[0] , 'jabatan' => $penandatangan[1]]);
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

