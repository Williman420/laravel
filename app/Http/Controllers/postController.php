<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class postController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('post', ['post' => $post]);
    }



    public function createPost()
    {
        return view('createPost');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->judul = $request->judul;
        $post->deskripsi = $request->deskripsi;
        $post->save();

        return redirect('/post');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post/showPost', ['post' => $post]);
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return view('post/editPost', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->judul = $request->judul;
        $post->deskripsi = $request->deskripsi;
        $post->save();
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/post');
    }
}
