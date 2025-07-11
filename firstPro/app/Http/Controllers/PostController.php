<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {

        $posts = DB::select("SELECT * FROM posts");

        // return $posts;
        return view('posts.index', compact('posts'));
    }
  

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    // {
    //     DB::insert(
    //         'INSERT INTO posts (title, content) VALUES (?, ?)',
    //         [$request->title, $request->content]
    //     );

    //     return redirect()->route('posts.index')->with('success', 'Post added');
    // }

    {
        DB::insert("INSERT INTO posts (title,content) VALUES (?,?)",[$request->title,$request->content]);
    }

    public function edit($id)
    {
        $post = DB::selectOne("SELECT * FROM posts WHERE id = ?", [$id]);
        return view('posts.edit', compact('post'));
        // return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
{
    DB::update(
        "UPDATE posts SET title = ?, content = ? WHERE id = ?",
        [$request->title, $request->content, $id]
    );

    return redirect()->route('posts.index')->with('success', 'Post updated');
}




    public function destroy($id)
    {
        DB::delete("DELETE FROM posts WHERE id = ?", [$id]);
        return redirect()->route('posts.index')->with('success', 'Post deleted');
    }
}
