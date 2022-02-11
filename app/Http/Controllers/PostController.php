<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;
use Wink\WinkTag;

class PostController extends Controller
{
    public function index()
    {
        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->paginate(10);
        
        $tags = WinkTag::all();
        
        return view('posts.index', [
                'posts' => $posts,
                'tags' => $tags
            ]);
    }

    public function tag(WinkTag $winkTag)
    {
        $posts = $winkTag->posts()
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->paginate(10);
        $tags = WinkTag::all();

        return view('posts.index', [
            'posts' => $posts,
            'tags' => $tags
        ]);
    }

    public function single($slug)
    {
       $post = WinkPost::live()->whereSlug($slug)->firstOrFail();

       return view('posts.single', compact('post'));
    }
}
