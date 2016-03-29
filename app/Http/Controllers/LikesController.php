<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LikesController extends Controller
{

    /**
     * If a User likes an Article, associate the Like with the user and the Article.
     *
     * @param $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function like($request) {
        // Create the like for the user and the article
        $like = new \App\Like;
        $like->create(['user_id' => \Auth::user()->id, 'article_id' => $request]);

        return redirect()->back();
    }

    /**
     * If a User unlikes an Article, find the Article with the User ID &
     * Article ID and delete it.
     *
     * @param $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unlike($request) {
        $user = \Auth::user()->id;
        $article = $request;
        $like = \App\Like::where((['user_id' => $user, 'article_id' => $article]));
        $like->delete();

        return redirect()->back();
    }
}