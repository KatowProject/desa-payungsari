<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $users = Post::all();
        return response()->json(["data" => $users]);
    }
}
