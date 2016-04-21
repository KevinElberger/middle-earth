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
        $articles = Article::latest()->simplePaginate(8);

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

        $tags = ['work', 'personal', 'programming', 'middle earth', 'school'];

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

        return redirect('articles');
    }

    /**
     * Save a new article.
     *
     * @param ArticleRequest $request
     *
     */
    public function createArticle(ArticleRequest $request) {
        if ($request['tag_list'] == 0) {
            $request['tag_list'] = "work";
        } else if($request['tag_list'] == 1) {
            $request['tag_list'] = "personal";
        } else if($request['tag_list'] == 2) {
            $request['tag_list'] = "programming";
        } else if($request['tag_list'] == 3) {
            $request['tag_list'] = "middle earth";
        } else if($request['tag_list'] == 4) {
            $request['tag_list'] = "school";
        }
        $article = \Auth::user()->articles()->create($request->all(['tag_list' => 'test']));
        return $article;
    }
}
