<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $post = Post::latest();     
        return view('blog.home',[
            'title' =>  'Desa Payungsari',
            'posts' =>  $post->paginate(3)
        ]);
    }

    public function about()
    {
        $post = Post::latest();     
        return view('blog.about',[
            'title' =>  'Desa Payungsari',
            'posts' =>  $post->paginate(3)
        ]);
    }

    public function pencarian()
    {

        $posts = Post::latest();

        if(request('q')){
            $posts = Post::where('title','like','%'.request('q').'%')
                    ->orWhere('body','like','%'.request('q').'%');
        }

        return view('blog.pencarian',[
            'title' => 'Portal Desa Payungsari',
            'posts' => $posts->get()

        ]);
    }

}
