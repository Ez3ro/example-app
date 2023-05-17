<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use App\Models\StreamView;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::query()
        ->where('active', '=', 1)
        ->orderBy('published_at', 'desc')
        ->paginate(1);

        $recents = Post::query()
        ->where('active', '=', 1)
        ->orderBy('published_at', 'desc')
        ->paginate(100);

        return view('home', compact('posts', 'recents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post, Request $request)
    {
        if(!$post->active || $post->published_at > Carbon::now()){
            throw new NotFoundHttpException();
        }

        $next = Post::query()
        ->where('active', true )
        ->whereDate('published_at', '<=', Carbon::now())
        ->whereDate('published_at', '>', $post->published_at)
        ->orderBy('published_at', 'asc')
        ->limit(1)
        ->first();

        $prev = Post::query()
        ->where('active', true )
        ->whereDate('published_at', '<=', Carbon::now())
        ->whereDate('published_at', '<', $post->published_at)
        ->orderBy('published_at', 'desc')
        ->limit(1)
        ->first();

        $user = $request->user();

        StreamView::create([  'ip_address' => $request->ip(),
        'user_agent' => $request->userAgent(),
        'post_id' => $post->id,
        'user_id' => $user ? $user->id : null,
        
        
        ]
          
    );


        return view('post.view', compact('post', 'prev', 'next'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
    public function byCategory(category $category)
    {
        $posts = Post::query()
        ->join('category_post', 'posts.id', '=', 'category_post.post_id')
        ->where('category_post.category_id', '=', $category->id)
        ->where('active', true)
        ->whereDate('published_at', '<=', Carbon::now())
        ->paginate(10);

        $recents = Post::query()
        ->where('active', '=', 1)
        ->orderBy('published_at', 'desc')
        ->paginate(100);

        return view('home', compact('posts', 'recents'));
        # code...
    }
}
