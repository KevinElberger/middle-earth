@extends('app')

@section('content')
    <br />
    <h1>{{ $article->title }}</h1>
    @if($article->likes->isEmpty())
        {!! Form::open(['url' => 'articles/'. $article->id . '/like', 'method' => 'POST']) !!}
        {!! Form::hidden('article_id', $article->id) !!}
        {!! Form::submit('Like', ['class' => 'btn btn-sm btn-with-count btn-default']) !!}
        {!! Form::close() !!}

    {{-- Check to see if the user's ID is listed in the user ID list in the article "likes" array --}}
    @elseif(in_array(\Auth::user()->id, $article->likes->lists('user_id')->toArray()))
        {!! Form::open(['url' => 'articles/'. $article->id . '/unlike', 'method' => 'POST']) !!}
        {!! Form::hidden('article_id', $article->id) !!}
        {!! Form::submit('Unlike', ['class' => 'btn btn-sm btn-with-count btn-info']) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['url' => 'articles/'. $article->id . '/like', 'method' => 'POST']) !!}
        {!! Form::hidden('article_id', $article->id) !!}
        {!! Form::submit('Like', ['class' => 'btn btn-sm btn-with-count btn-default']) !!}
        {!! Form::close() !!}
    @endif
    <div id="share"></div>
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

    <p>Likes: {{ $result = count($article->likes->lists('user_id')->toArray()) }}</p>
    <div id="bottom">
        <div id="created_by">
            <p>Article created by: <a href="/profiles/index/{{ $user[0]->id }}">{{ ucfirst($user[0]->name) }}</a></p>
        </div>

        <div id="created_at">
            <p>
                Article created on: {{ $article->created_at->format('m/d/Y') }}
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