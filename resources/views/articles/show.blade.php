@extends('app')
@section('content')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
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
							    <li><a class="reply{{$c->id}}" id="reply{{$c->id}}" href="#{{$c->id}}Comment">Reply</a></li>
                            </ul>
                        </span>
                        <div id="wrap">
                            <div id="{{$c->id}}Comment">
                                {!! Form::open(['url' => 'articles/'. $article->id . '/reply', 'method' => 'POST']) !!}
                                {!! Form::hidden('comment_id', $c->id) !!}
                            </div>
                                {!! Form::close() !!}

                            {{-- Check if comment has any replies and display them. --}}
                            @if(!$c->replies->isEmpty())
                                @foreach($replies as $r)

                                @endforeach
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    <script src="/js/show.js"></script>
@stop

<style>
    h1 {
        text-align: center;
    }
    h3 {
        text-align: center;
    }
    #urlForPic {
        display: none;
    }
    #created_at {
        float: left;
    }
    #created_by {
        float: right;
    }
    div[id*="Comment"] {
        width: 80%;
        margin: 0 auto;
    }
    a{
        text-decoration: none;
    }
    button{
        outline: none;
        border: none;
    }
    .list-group-item p a {
        font-weight: 500;
        color: rgba(3, 161, 241, 1);
        text-decoration: underline!important;
    }
    .list-group-item p a:hover {
        font-weight: 500;
        color: rgba(3, 161, 241, 0.8);
        text-decoration: underline!important;
    }
    .card{
        border: none !important;
        background-color: #fff;
        margin-top: 5%;
        overflow: hidden;
    }
    .paper {
        -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16),0 2px 10px 0 rgba(0,0,0,.12);
    }
    details{
        background-color: #f4f4f4;
    }
    .title{
        display: inline-block;
        margin-left: 3em;
    }
    .title a {
        font-size: 14px !important;
        font-weight: 500 !important;
        color: rgba(0,0,0,.8) ;
        text-decoration: none !important;
    }
    .title a:hover {
        color: rgba(0,0,0,.7);
    }
    .title time {
        font-size: 12px;
        color: rgba(0,0,0,.5)!important;
        font-weight: 400;
        margin-left: 6px;
    }
    .title p {
        margin-bottom: 0;
        white-space: normal;
        color: rgba(0,0,0,.8);
        font-size: 14px;
        margin-top: 0.215em;
    }
    .circle {
        position: absolute;
        width: 42px;
        height: 42px;
        overflow: hidden;
        left: 15px;
        display: inline-block;
        vertical-align: middle;
        border-radius: 50%;
    }
    .circle img{
        width: 100%;
    }
    ul.actions {
        position: absolute;
        right: 1em;
        top: 1.2em;
        display: none;
        font-size: 12px;
    }
    ul.actions a{
        text-decoration:none !important;
        color: rgba(0,0,0, 0.6);
        font-size: 11px;
    }
    .list-group-item{
        background-color:transparent !important;
    }
    .list-group-item{
        border: none !important;
        border-radius: 0 !important;
    }
    .list-group-item:hover{
        background-color:rgba(0,0,0, 0.03) !important;
        border-radius: 0 !important;
    }
    .list-group .list-group-item ul.actions{
        display: none ;
    }
    .list-group .list-group-item:hover ul.actions{
        display:inherit;
        list-style: none;
    }
    #lastComment{
        background-color: #f4f4f4;
    }
    form{
        padding: 1em;
    }
    .form-control {
        display: block;
        width: 100%
    padding: 0.375rem 0.1rem !important;
        font-size: 14px !important;
        font-weight: 400 !important;
        line-height: 1.5 !important;
        color: #55595c !important;
        background-color: transparent !important;
        background-image: none !important;
        border: none !important;
        border-radius: 0 !important;
        border-bottom: 1px solid #ccc !important;
    }
    .form-control:focus{
        border-color: rgba(3, 161, 241, 1) !important;
    }
</style>