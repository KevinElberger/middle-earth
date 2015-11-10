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
     * Create a new articles controller instance.
     *
     */
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

        $articles = Article::latest()->simplePaginate(7);

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

        $this->createArticle($request);

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

        $user = \Auth::user();

        $user_name = \Auth::user(['name']);

        $tags = \App\Tag::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags', 'user'));
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

        $this->syncTags($article, $request->input('tag_list'));

        return redirect('articles');
    }

    /**
     * Sync up the list of tags in the database.
     *
     * @param Article $article
     * @param array $tags
     */
    private function syncTags(Article $article, array $tags) {
        $article->tags()->sync($tags);
    }


    /**
     * Save a new article.
     *
     * @param ArticleRequest $request
     * @return mixed
     */
    public function createArticle(ArticleRequest $request) {

        $article = \Auth::user()->articles()->create($request->all());

        $this->syncTags($article, $request->input('tag_list'));


        return $article;
    }
}
