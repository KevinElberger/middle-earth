@extends('app')

@section('content')
    <h1>Articles</h1>

    <hr/>
    <div class="mdl-grid">
    @foreach($articles->all() as $article)
        {{--<div class="sml-card sml-cell sml-cell--6-col sml-cell--1-col-tablet mdl-shadow--2dp">--}}
            <div class="mdl-card mdl-cell mdl-cell--4-col mdl-cell--3-col-tablet mdl-shadow--4dp card-1">
                <div class="mdl-card__title sml-typography--regular-2"><h3><a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a></h3></div><br />
            </div>
    @endforeach
    </div>

    {!! $articles->render() !!}

@stop

<style>
    h1 {
        text-align: center;
    }

    .mdl-card__title {
        flex-direction: column;
        text-align: center;
    }

    .mdl-card {
        text-align: center;
    }

    .card-1 {
        transition: all 0.2s ease-in-out;
    }

    .card-1:hover {
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    }
</style>