<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

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
        $post = DB::table('posts')->where('id', $id)->first();
        $post = $post ?: null; // Null check to handle a case where post is not found
        return view('single-post', compact('post'));
    }

    public function deletePost($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return back()->with('post_deleted', 'Post deleted successfully!');
    }

    public function editPost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('edit-post', compact('post'));
    }

     public function editPostSubmit(Request $request)
    {
        DB::table('posts')->where('id', $request->id)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return back()->with('post_updated', 'Post updated successfully!');
    }

    public function innerJoinClause()
    {
      $request =  DB::table('posts')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->select('users.name', 'posts.title', 'posts.body')
            ->get();
    return $request;
    }

    public function leftJoinClause()
    {
        $result = DB::table('users')
            ->leftJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();
        return $result;
    }

    public function rightJoinClause()
    {
        $result = DB::table('users')
            ->rightJoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();
        return $result;
    }

    public function getAllPostsUsingModel()
    {
        $posts = Post::all();
        return $posts;
    }

}
