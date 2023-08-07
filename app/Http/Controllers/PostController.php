<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $posts = Post::with(['category', 'author'])->paginate(6);

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        $categories = Category::orderBy('name')->pluck('name', 'id');

        return view('posts.create', ['post' => new Post, 'categories' => $categories]);
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
        $this->authorize('update', $post);

        $categories = Category::orderBy('name')->pluck('name', 'id');

        return view('posts.edit', ['post' => $post, 'categories' => $categories]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post)
    {
        $this->authorize('update', $post);

        $post->update($request->validated());

        return to_route('posts.show', $post)->with('status', __('Post updated!'));
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return to_route('posts.index')->with('status', __('Post deleted!'));
    }
}
