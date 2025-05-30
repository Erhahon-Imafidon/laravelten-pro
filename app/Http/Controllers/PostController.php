<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPosts()
    {
        $posts = DB::table('posts')->get();
        return view('posts', compact('posts'));
    }

    public function addPost()
    {
        return view('add-post');
    }

    public function addPostSubmit(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body,
    ]);
        return back()->with('post_created', 'Post created successfully!');
    }

    public function getPostById($id)
    {
        $post = DB::table('post')->where('id', $id)->first();
        return view('single-post', compact('post'));
    }
}
