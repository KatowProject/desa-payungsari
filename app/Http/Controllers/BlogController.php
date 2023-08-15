<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Post;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Home
    public function index()
    {
        $post = Post::latest();     
        return view('blog.home',[
            'title' =>  'Desa Payungsari',
            'posts' =>  $post->paginate(3)
        ]);
    }

    // Profile Desa
    public function tentang_desa()
    {
        return view('blog.profile-desa.tentang-desa',[
            'title' => 'Tentang Desa Payungsari',
        ]);
    }
    
    public function perangkat_desa()
    {
        return view('blog.profile-desa.struktur-organisasi',[
            'title' => 'Struktur Perangkat Desa Payungsari',
            'pegawai' => Pegawai::all(),
        ]);
    }
    
    public function struktur_organisasi()
    {
        return view('blog.profile-desa.struktur-organisasi',[
            'title' => 'Struktur Pemerintah Desa Payungsari',
            'pegawai' => Pegawai::all(),
        ]);
    }
    
    public function lembaga_desa()
    {
        
        return view('blog.profile-desa.lembaga-desa',[
            'title' => 'Lembaga Desa Payungsari',
        ]);
    }
    
    // Informasi Publik
    public function berita_desa()
    {
        
        return view('blog.informasi-publik.berita-desa',[
            'title' => 'Berita Desa Payungsari',
        ]);
    }
    
    public function kegiatan_desa()
    {
        
        return view('blog.informasi-publik.kegiatan-desa',[
            'title' => 'Kegiatan Desa Payungsari',
        ]);
    }

    public function pencarian()
    {

        $posts = Post::latest();

        if(request('q')){
            $posts = Post::where('title','like','%'.request('q').'%')
                    ->orWhere('excerpt','like','%'.request('q').'%')
                    ->orWhere('body','like','%'.request('q').'%');
        }
        
        return view('blog.pencarian',[
            'title' => 'Portal Desa Payungsari',
            'posts' => $posts->get()

        ]);
    }

}
