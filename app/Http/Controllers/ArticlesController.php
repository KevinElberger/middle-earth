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
     * @param Requests\CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request) {

        Article::create($request->all());

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
