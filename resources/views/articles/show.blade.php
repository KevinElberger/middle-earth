@extends('app')

@section('content')
    <br />
    <h1>{{ $article->title }}</h1>
    <hr />
        <article>
            {{ $article->body }}
            {{ $article->name }}
        </article>
    <hr />
    <br />
    <p>Tag:</p>
    <ul>
        <li>{{ $article->tag_list }}</li>
    </ul>

    <div id="bottom">
        <div id="created_by">
            <p>Article created by: <a href="/profiles/index/{{ $user[0]->id }}">{{ ucfirst($user[0]->name) }}</a></p>
        </div>

        <div id="created_at">
            <p>
                Article created on: {{ $article->created_at }}
            </p>
        </div>
    </div>
@stop

<style>
    h1 {
        text-align: center;
    }

    #created_at {
        float: left;
    }

    #created_by {
        float: right;
    }

</style>