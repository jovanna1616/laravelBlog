<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Post;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();


        // Get the currently authenticated user...
        $user = Auth::user();
        // Get the currently authenticated user's ID...
        // $id = Auth::id();

        return view('posts.index', compact('posts', 'user'));
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new Post;
        $post->title = request('title');
        $post->body = request('body');
        $post->published = false;

        $post->save();


        return redirect('/posts');

    }
}
