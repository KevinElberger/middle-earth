<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;

class UrlController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.basic');
    }

    /**
     * Return a JSON response of the most recent article.
     *
     * @return \Illuminate\Http\Response
     */
    public function article()
    {
        $article = \App\Article::get()->last();

        return response()->json([
            'article' => $article,
        ]);
    }

    /**
     * Creates an article via API request.
     * Manually pulls the authenticated
     * user for the user_id attribute.
     *
     * @param $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $article = \Auth::user()->articles()->create($request->all(['user_id' => \Auth::user('id'),
                                                                    'created_at' => Carbon::now(),
                                                                    'updated_at' => Carbon::now(),
                                                                    'published_at' => Carbon::parse($request->published_at)]));

        return response()->json([
            'new_article' => $article,
        ]);
    }

    /**
     * Returns a JSON response of a requested user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \App\User::where(['name' => $request['name']])->get();
        $id = $user[0]['id'];
        $articles = \App\Article::where(['user_id' => $id])->get();
        $profile = \App\Profile::where(['user_id' => $id])->get()->first();

        return response()->json([
           'error' => false,
            'user' => $user,
            'articles' => $articles,
            'profile' => $profile,
        ]);
    }

    /**
     * Display the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show() {
        return response()->json([
            'authenticated' => 'true',
        ]);
    }

    /**
     * Create a user profile via API request.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createProfile(Request $request) {

        $profile = \Auth::user()->profiles()->create($request->all(['user_id' => \Auth::user('id')]));

        return response()->json([
            'response' => 'Profile updated successfully!',
            'profile' => $profile,
        ]);
    }
}
