<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index() {

        // Fix this later
        // $articles = Article::latest()->published()->get();

        $articles = Article::latest()->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id) {

        $article = Article::findOrFail($id);

        return view('articles.show', compact($article));
    }

    public function create() {

        return view('articles.create');
    }


    /**
     * Saves an article.
     *
     * @param Requests\CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\CreateArticleRequest $request) {

        Article::create($request->all());

        return redirect('articles');
    }

    public function edit() {

        return view('articles.edit');
    }
}
