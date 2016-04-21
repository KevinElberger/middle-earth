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
    <div class="card paper">
        <details>
            <summary style="padding:1em;">3 comments</summary>
            <ul class="list-group">
                <li class="list-group-item ">
						  <span class="circle">
							  <img src="http://bigbeehive.com/demo/orientplay-angular/img/user/vector4.png" alt="user">
						  </span>
						  <span class="title">
							  <a href="#">Abbey Christensen</a> <time> 5:09 PM</time>
								<p>Can’t wait to see this movie.</p>
						  </span>
                    <ul class="actions" href="#">
                        <li><a class="reply" href="#">Reply</a></li>
                    </ul>
                </li>
                <li class="list-group-item">
					  <span class="circle">
						  <img src="http://bigbeehive.com/demo/orientplay-angular/img/user/vector2.png" alt="user">
					  </span>
					  <span class="title">
						  <a href="#">Ali Connors</a> <time> 5:15 PM</time>
							<p>Mee too.</p>
					  </span>
                    <ul class="actions" href="#">
                        <li><a class="reply" href="#">Reply</a></li>
                    </ul>
                </li>
                <li class="list-group-item">
					  <span class="circle">
						  <img src="http://bigbeehive.com/demo/orientplay-angular/img/user/vector3.png" alt="user">
					  </span>
					  <span class="title">
						  <a href="#">Peter Carlsson</a> <time> 5:30 PM</time>
							<p><a href="#">Abbey Christensen</a> I thought it was a good movie. The slow motion was a tad excessive at times, but overall it was good! I'm love it ;) </p>
					  </span>
                    <ul class="actions" href="#">
                        <li><a class="reply" href="#">Reply</a></li>
                    </ul>
                </li>
            </ul>
        </details>
        <ul id="lastComment" class="list-group">
            <li class="list-group-item">
				  <span class="circle">
					  <img src="http://bigbeehive.com/demo/orientplay-angular/img/user/vector4.png" alt="user">
				  </span>
				  <span class="title">
					  <a href="#">Sandra Adams </a> <time> 6:00 PM</time>
					  	<p><a href="#">Peter Carlsson</a> This is without doubt the greatest flim i’ve ever seen.</p>
				  </span>
                <ul class="list-inline actions" href="#">
                    <li><a class="edit" href="#" title="Edit comment">Edit</a></li>
                    <li class="roff"><a class="delete" href="#" title="Delete comment"></a></li>
                </ul>
            </li>
        </ul>
        <form>
            <fieldset class="form-group">
                <input type="text" class="form-control" placeholder="Add a comment">
            </fieldset>
            <button type="button" class="btn btn-sm btn-success">Post</button>
            <button type="button" class="btn btn-sm btn-secondary">Cancel</button>
        </form>
    </div>
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
    summary{
        outline: 0;
        cursor: pointer;
        color: rgba(0,0,0,.8);
        font-size: 14px;
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


    summary::-webkit-details-marker {
        display: none;
    }

    summary::after {
        content: "expand_more";
        font-family: 'Material Icons';
        color:rgba(0,0,0, 1);
        float: left;
        font-size: 1.5em;
        margin: 0px 10px 0 0;
        padding: 0;
        text-align: center;
        left: 4.5em; top: 0.455em;
        position: absolute;
    }

    details[open] summary:after {
        color:rgba(0,0,0, 1);
        content: "expand_less";
        font-family: 'Material Icons';
    }

    .delete::after{

        content: "add_circle_outline";
        font-family: 'Material Icons';
        font-size:100%;
        vertical-align:bottom;

    }

    .roff{
        -ms-transform: rotate(45deg); /* IE 9 */
        -webkit-transform: rotate(45deg); /* Chrome, Safari, Opera */
        transform: rotate(45deg);
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