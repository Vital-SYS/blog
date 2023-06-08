<?php

namespace App\Http\Controllers\Person\Liked;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = auth()->user()->likedPosts;
        return view('person.liked.index', compact('posts'));
    }
}
