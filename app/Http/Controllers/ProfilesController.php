<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfilesController extends Controller
{
    /**
     * Display a user's profile page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idNum)
    {
        $user = \App\User::where(['id' => $idNum])->get()->first();
        $prof = \App\Profile::where(['user_id' => $idNum])->get()->last();
        $articles = \App\Article::where(['user_id' => $idNum])->get();

        $url = 'http://www.gravatar.com/avatar/';
        $url .= md5( strtolower(trim($user['email'])));
        $url .= "?s=80&d=mm&r=g";

        return view('profiles/index', compact ('user', 'url', 'prof', 'articles'));
    }

    /**
     * Store a newly created profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = \Auth::user()->profiles()->create($request->all());


        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the user's profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $user = \Auth::user()->profiles()->update($request->except('_token'));
        flash()->success('Your profile has been updated!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}