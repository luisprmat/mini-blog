<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $posts = Post::query()
            ->published()
            ->orWhere('user_id', auth()->user()?->id)
            ->with(['category', 'author'])
            ->orderByDesc('published_at')
            ->paginate(6);

        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        $categories = Category::orderBy('name')->pluck('name', 'id');

        return view('posts.create', ['post' => new Post, 'categories' => $categories]);
    }

    public function store(SavePostRequest $request)
    {
        $data = $request->validated();

        if ($request->filled('image')) {
            $newFilename = Str::after($request->input('image'), 'tmp/');
            Storage::disk('public')->move($request->input('image'), "images/posts/{$newFilename}");

            $data = array_merge($data, ['image' => "images/posts/{$newFilename}"]);
        }

        $request->boolean('published')
                    ? Post::create($data + ['published_at' => now()])
                    : Post::create($data);

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

        $data = $request->validated();

        if ($request->filled('image')) {
            if (str()->afterLast($request->input('image'), '/') !== str()->afterLast($post->image, '/')) {
                if ($post->image) {
                    Storage::disk('public')->delete($post->image);
                }
                $newFilename = Str::after($request->input('image'), 'tmp/');
                Storage::disk('public')->move($request->input('image'), "images/posts/{$newFilename}");
            }

            $data = isset($newFilename)
                        ? array_merge($data, ['image' => "images/posts/{$newFilename}"])
                        : array_merge($data, ['image' => $post->image]);
        } else {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
                $data['image'] = null;
            }
        }

        if ($post->isPublished) {
            if ($request->boolean('published')) {
                $post->update($data);
            } else {
                $post->update($data + ['published_at' => null]);
            }
        } else {
            if ($request->boolean('published')) {
                $post->update($data + ['published_at' => now()]);
            } else {
                $post->update($data);
            }
        }

        return to_route('posts.show', $post)->with('status', __('Post updated!'));
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return to_route('posts.index')->with('status', __('Post deleted!'));
    }

    public function upload(Request $request)
    {
        if ($request->file('image')) {
            $path = $request->file('image')->store('tmp', 'public');
        }

        return $path;
    }

    public function revert(Request $request)
    {
        Storage::disk('public')->delete($request->getContent());
    }
}
