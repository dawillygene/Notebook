<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all()->sortDesc();
        $posts = Post::all()->where("user_id", auth()->user()->id);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        
        $data=$request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $data['user_id']=auth()->user()->id;

        Post::create($data);

        return redirect()->route('posts.index')
                         ->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        if($post->user_id != auth()->user()->id){
            abort(404);
        }

        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        if($post->user_id != auth()->user()->id){
            abort(404);
        }

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);


        if($post->user_id != auth()->user()->id){
            abort(404);
        }

        $post->update($data);

        return redirect()->route('posts.index')
                         ->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {

        if($post->user_id != auth()->user()->id){
            abort(404);
        }

        $post->delete();

        return redirect()->route('posts.index')
                         ->with('success', 'Post deleted successfully.');
    }
}
