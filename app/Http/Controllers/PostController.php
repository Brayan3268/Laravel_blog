<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

//This controller is for the posts pages
class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function show($post){
        $post = Post::find($post);
        return view('posts.show', compact('post'));
    }
}
