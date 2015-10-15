@extends('app')

@section('content')
    <h1>Articles</h1>

    <hr/>

    @foreach($articles->all() as $article)
        <article>
            <h2>
                <a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a>
            </h2>

            <div class="body">

                {{-- PHP used to split article body to 80 characters for display purposes --}}
                @if(strlen($article->body) < 80)
                    {{ $article->body }}
                @else
                    {{-- If article body is longer than 80 chars, print first 80 --}}
                    <?php
                        $body = $article->body;
                        $arr1 = str_split($body, 79);
                        $stringPart = $arr1[0];
                        $stringComplete = $stringPart . "...";
                        echo $stringComplete;
                    ?>
                @endif
            </div>
        </article>
    @endforeach

    {!! $articles->render() !!}

@stop

<style>
    h1 {
        text-align: center;
    }
</style>