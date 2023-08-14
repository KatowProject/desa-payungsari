<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.post.post-index',[
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
        return view('dashboard.post.post-create',[
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
            'body' =>  'required',
        ]);

        if($request->file('image')){
            $validate['image']=$request->file('image')->storePublicly('postingan');
        }else{
            $validate['image']= 'postingan/default.jpg';
        }
        
        $validate['excerpt']= Str::limit(strip_tags($request->body), 150, '...');

        Post::create($validate);
        $request->session()->put('postCreate','success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.post-show',[
            'title'     =>  'Lihat Postingan',
            'post'      =>  $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.post.post-edit',[
            'title'     =>  'Edit Postingan',
            'post'      =>  $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' =>  'required',
            'body' =>  'required',
        ]);

        if($request->file('image')){
            Storage::delete($post->image);
            $validated['image']=$request->file('image')->storePublicly('postingan');
        }else{
            $validated['image']= $post->image;
        }
        
        $validated['excerpt']= Str::limit(strip_tags($request->body), 150, '...');

        Post::where('id', $post->id)->update($validated);
        return back()->with('postUpdate','success');
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
