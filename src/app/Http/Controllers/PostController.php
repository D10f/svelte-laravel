<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * The main page with all the posts
     *
     */
    public function index()
    {
        return Inertia::render("Posts/Index", [
            'posts' => Post::all(),
            'home_page' => route('home'),
        ]);
    }

    /**
     * Shows the post creation page.
     *
     */
    public function create()
    {
        return Inertia::render("Posts/Create", [
            'home_page' => route('home'),
            'store_post_url' => route('posts.store')
        ]);
    }

    /**
     * Creates a new post.
     *
     * @param Request
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'min:1', 'max:255'],
            'content' => ['required', 'min:1', 'max:2048']
        ]);

        Post::create($validated);

        return redirect(route('posts.index'));
    }
}
