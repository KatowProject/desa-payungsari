<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.blog.post-index',[
            'title' =>  'Postingan',
            'angka' =>  '1',
            'posts' =>  Post::latest()->paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blog.post-create',[
            'title'     =>  'Buat Postingan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' =>  'required',
            'excerpt' =>  'required',
            'body' =>  'required',
        ]);

        if($request->file('image')){
            $validate['image']=$request->file('image')->storePublicly('post-image');
        }else{
            $validate['image']= 'postImage/example.jpg';
        }

        Post::create($validate);
        $request->session()->put('postCreate','success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Post $post)
    {
        Post::destroy($post->id);
        Storage::delete($post->image);
        $request->session()->put('post_destroy', 'berhasil');
        return redirect('post');
    }

}
