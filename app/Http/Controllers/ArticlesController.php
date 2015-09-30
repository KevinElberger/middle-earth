<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\HttpResponse;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

    // Triggers authentication middleware
    public function __construct() {
        $this->middleware('auth', ['only' => 'create']);
    }


    /**
     * Display all articles.
     *
     * @return \Illuminate\View\View
     */
    public function index() {

        // Fix this later
        // $articles = Article::latest()->published()->get();

        $articles = Article::latest()->get();

        return view('articles.index', compact('articles'));
    }


    /**
     * Display a specific article.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id) {

        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }


    /**
     * Create an article.
     *
     * @return \Illuminate\View\View
     */
    public function create() {


        return view('articles.create');
    }


    /**
     * Saves an article.
     *
     * @param Requests\ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request) {

        // Create article with attributes from the form
        $article = new Article($request->all());

        // Get the authenticated user's articles and save a new article
        \Auth::user()->articles()->save($article);

        return redirect('articles');
    }


    /**
     *  Edits an article.
     *
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id) {

        $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }


    /**
     * Update an existing article.
     *
     * @param $id
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, ArticleRequest $request) {

        $article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }
}
