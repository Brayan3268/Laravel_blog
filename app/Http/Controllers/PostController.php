<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

//This controller is for the posts pages
class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();

        return redirect('/posts');
    }

    public function show($post){
        $post = Post::find($post);
        return view('posts.show', compact('post'));
    }
}