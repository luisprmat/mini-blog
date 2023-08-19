<?php

namespace App\Http\Controllers;

use App\Models\Post;

class HomeController extends Controller
{
    public function __invoke()
    {
        $posts = Post::query()
            ->published()
            ->with(['category', 'author'])
            ->orderByDesc('published_at')
            ->take(3)
            ->get();

        return view('welcome', ['posts' => $posts]);
    }
}
