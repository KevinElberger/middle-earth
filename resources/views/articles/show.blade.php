@extends('app')

@section('content')

    <br />

    <h1>{{ $article->title }}</h1>

    <article>
        {{ $article->body }}
    </article>

    <hr />
    <p>
        Article created on: {{ $article->created_at }}
    </p>
@stop

<style>
    h1 {
        text-align: center;
    }
</style>