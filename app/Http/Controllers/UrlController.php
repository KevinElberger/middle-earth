<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UrlController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth.basic');
    }

    /**
     * Display a listing of the resource.
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
     * Store a newly created resource in storage.
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() {
        return response()->json([
            'authenticated' => 'true',
        ]);
    }
}
