@extends('app')
@section('content')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
    <link rel="stylesheet" href="/css/show.css">
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
    </div><br/>
    <h3>Leave A Comment</h3>
    <div class="card paper">
        <fieldset class="form-group">
            <!-- Form for posting comments on an article. -->
            {!! Form::open(['url' => 'articles/'. $article->id . '/comment', 'method' => 'POST']) !!}
            {!! Form::hidden('article_id', $article->id) !!}
            {!! Form::text('comment', null, ['class' => 'form-control', 'placeholder' => 'Add a comment', 'required']) !!}
            {!! Form::submit('Post', ['class' => 'btn btn-sm btn-success']) !!}
            {!! Form::close() !!}
        </fieldset>
        @if(!$article->comments->isEmpty())
            <summary style="padding: 1em;"><b>{{count($article->comments)}} Comments</b></summary>
            <ul id="lastComment" class="list-group">
                {{-- Display comments if article has any --}}
                @foreach($article->comments as $c)
                    <div id="urlForPic">
                        {{ $url = 'http://www.gravatar.com/avatar/'}}
                        {{ $url .= md5( strtolower(trim(\App\User::where(['id' => $c->user_id])->get()->first()->email)))}}
                        {{ $url .= "?s=80&d=mm&r=g"}}
                    </div>
                    <li class="list-group-item">
                        <span class="circle"><img src="{{$url}}"> </span>
                        <span class="title">{{ucfirst(\App\User::where(['id' => $c->user_id])->get()->first()->name)}}
                            <time>{{$c->created_at}}</time>
                            <p>{{$c->comment}}</p>
                            <ul class="actions" href="#">
							    <li><a class="reply{{$c->id}}" id="reply{{$c->id}}" href="#paper">Reply</a></li>
                            </ul>
                        </span>
                        <div id="innerWrap">
                            {!! Form::open(['url' => 'articles/'. $article->id . '/comment/' . $c->id, 'method' => 'PATCH']) !!}
                            {!! Form::hidden('comment_id', $c->id) !!}
                            <div id="{{$c->id}}Comment">
                            </div>
                                {!! Form::close() !!}
                            {{-- Check if comment has any replies and display them. --}}
                            @if(!$c->replies->isEmpty())
                                @foreach($c->replies as $r)
                                    <div id="urlForPic">
                                        {{ $urlRep = 'http://www.gravatar.com/avatar/'}}
                                        {{ $urlRep .= md5( strtolower(trim(\App\User::where(['id' => $r->user_id])->get()->first()->email)))}}
                                        {{ $urlRep .= "?s=80&d=mm&r=g"}}
                                    </div>
                                        <li class="list-group-item" style="margin: 0 auto; width: 80%;">
                                            <span class="circle"><img src="{{$urlRep}}"> </span>
                                            <span class="title">{{ucfirst(\App\User::where(['id' => $r->user_id])->get()->first()->name)}}
                                            <time>{{$r->created_at}}</time>
                                            <p>{{$r->comment}}</p>
                                            </span>
                                        </li>
                                @endforeach
                            @endif
                @endforeach
                        </div>
                    </li>
            </ul>
        @endif
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="/js/show.js"></script>
@stop