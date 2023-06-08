<?php

namespace App\Http\Controllers\Person\Liked;

use App\Models\Post;

class DeleteController
{
    public function __invoke(Post $post)
    {
        auth()->user()->likedPosts()->detach($post->id);
        return redirect()->route('person.liked.index');
    }

}
