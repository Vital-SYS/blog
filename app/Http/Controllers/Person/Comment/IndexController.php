<?php

namespace App\Http\Controllers\Person\Comment;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = auth()->user()->comments;
        return view('person.comment.index', compact('comments'));
    }
}
