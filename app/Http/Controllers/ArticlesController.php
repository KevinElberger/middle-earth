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
     * @param Article $article
     * @return \Illuminate\View\View
     */
    public function show(Article $article) {

        $user = \App\User::where(['id' => $article['user_id']])->get();

//        $tags = \App\Tag::where(['article_id' => $article['id']]);

        $tags = $article['tags'];

        return view('articles.show', compact('article', 'user', 'tags'));
    }


    /**
     * Create an article.
     *
     * @return \Illuminate\View\View
     */
    public function create() {

        $user = \Auth::user();

        $user_name = \Auth::user(['name']);

        $tags = \App\Tag::lists('name', 'id');

        return view('articles.create', compact('user', 'tags', 'user_name'));
    }


    /**
     * Saves an article.
     *
     * @param Requests\ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request) {

        $article = \Auth::user()->articles()->create($request->all());

        // Grab tag ID numbers to store
        $tagIDs = $request->input('tags');

        // Create article with attributes from the form
        //$article = new Article($request->all());

        //$article['user_name'] = $_REQUEST['user_name'];
        // Get the authenticated user's articles and save a new article
        //\Auth::user()->articles()->save($article);


        $article->tags()->attach($tagIDs);

        // Flash message that is displayed when an article is successfully created
        flash()->success('Your article has been created');


        return redirect('articles');
    }


    /**
     *  Edits an article.
     *
     * @param Article $article
     * @return \Illuminate\View\View
     */
    public function edit(Article $article) {

        return view('articles.edit', compact('article'));
    }


    /**
     * Update an existing article.
     *
     * @param Article $article
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Article $article, ArticleRequest $request) {

        $article->update($request->all());

        return redirect('articles');
    }
}
