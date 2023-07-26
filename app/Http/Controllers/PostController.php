<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request)
    {
        $post = Post::create($request->validated());

        $post->image = 'images/posts/article-'.$post->id % 6 + 1 .'.jpg';

        $post->save();

        return to_route('posts.index')->with('status', __('Post created!'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return to_route('posts.show', $post)->with('status', __('Post updated!'));
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return to_route('posts.index')->with('status', __('Post deleted!'));
    }
}
