<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;


class PostinganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::latest();
        
        if(request('key')){
            $post->where('title','like','%'.request('key').'%')
                    ->orWhere('body','like','%'.request('key').'%');
        }

        return view('blog.postingan.index',[
            'title' =>  'Desa Payungsari',
            'posts' =>  $post->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blog.add_berita',[
            'title'     =>  'Buat Berita'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $validasi = $request->validate([
            'judul_berita'      =>  'required',
            'slug'              =>  'required',
            'ringkasan_berita'  =>  'required',
            'isi_berita'        =>  'required',
        ]);
        $validasi['gambar'] = $request->file('gambar')->storePublicly('post_img');

        Post::create($validasi);
        $request->session()->put('post_create','berhasil');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('blog.postingan.postingan-detail',[
            'title' =>  'Detail Berita',
            'post' =>  $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.blog.edit',[
            'title' =>  'Edit Postingan',
            'post' =>  $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        request()->session()->put('post_destroy', 'berhasil');
        return redirect('blog');
    }
}
