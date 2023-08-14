<?php

namespace App\Http\Controllers;

use App\Models\IndekSurat;
use App\Models\Pegawai;
use App\Models\Penduduk;
use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title'     =>  'Dashboard',
            'penduduk'     =>  Penduduk::all(),
            'pegawai'     =>  Pegawai::all(),
        ]);
    }

    public function indeks_surat()
    {
        return view('dashboard.indeks_surat', [
            'title' =>  'Indeks Surat',
            'angka' =>  '1',
            'indeks' =>  IndekSurat::all(),
        ]);
    }

    public function blog()
    {
        return view('dashboard.blog.index', [
            'title' =>  'Indeks Surat',
            'angka' =>  '1',
            'posts' =>  Post::latest()->get(),
        ]);
    }
}
