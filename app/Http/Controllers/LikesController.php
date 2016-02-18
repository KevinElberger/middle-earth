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
        \Auth::user()->likes()->create($request->all());

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
        $like = new Like;
        $user = \Auth::user();
        $article = $request['article_id'];
        $like->where('user_id', $user->id)->where('article_id', $article)->delete();

        return redirect()->back();
    }
}
