<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class CreatePostsController extends Controller
{
    //
    public function create()
    {
        return view('posts.create');

    }

    public function store(Request $request)
    {
//        $post = Post::create($request->all()); //Una forma de crearla

        $post = new Post($request->all());
        auth()->user()->posts()->save($post);

        return $post->title;
    }
}
