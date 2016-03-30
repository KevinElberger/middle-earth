@extends('app')
    <div class="container-fluid">
        <br />
        <br />
        <div class="row">
            <div class="col-sm-4">
                <div class="jumbotron" style="background:transparent !important" id="profileSummary">
                    <img src="{{ $url }}" alt="profile image" />
                    <h3>{{ ucfirst($user['name']) }}'s Profile</h3>
                    <hr />
                    <div id="details">
                        @if(!is_null($prof))
                            <p><small><span class="glyphicon glyphicon-map-marker"></span> Location: {{ $prof->location }}</small></p>
                        @else
                            <p><small>Location: N/A</small></p>
                        @endif
                        <p><small><span class="glyphicon glyphicon-user"></span> Joined on: {{ $user->created_at->format('m/d/Y') }}</small></p>
                        <hr />
                        <h3><b>Bio</b></h3>
                        @if(is_null($prof))
                            <p>There's nothing here! Edit your profile to add a bio.</p>
                        @else
                            {{ $prof->profile }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="jumbotron" style="background:transparent !important" id="profileText">
                    <h3 class="header"><b>Articles</b></h3>
                    <div class="mdl-grid">
                    @foreach($articles->all() as $article)
                        <div onclick="location.href='/articles/{{$article->id}}'"
                             class="redirect mdl-js-button mdl-js-ripple-effect mdl-card mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-shadow--4dp card-1">
                            <div class="mdl-card__title mdl-typography--regular-1"><p>{{ $article->title }}</p></div><br />
                            <a class="mdl-button mdl-button--colored mdl-js-ripple-effect" href="/articles/{{ $article->id }}">Read More</a>
                            <div class="mdl-card__actions mdl-card--border">
                                <div class="mdl-layout-spacer">
                                    <div class="mdl-typography--regular-1">{{ $result = count($article->likes->lists('user_id')->toArray()) }}
                                        <button class="mdl-button mdl-button--icon mdl-button--colored"><i class="material-icons">favorite</i></button>'s
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
<style>
    .mdl-card__title {
        flex-direction: column;
        text-align: center;
    }

    .mdl-layout-spacer {
        padding-top: 5px;
        margin-top: 5px;
    }

    .card-1 {
        transition: all 0.2s ease-in-out;
    }

    .card-1:hover {
        box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    }

    h1 {
        text-align: center;
    }

    img {
        display: block;
        margin: 0 auto;
    }

    .header {
        text-align: center;
    }

    .clickable-row {
        text-align: center;
    }

    .col-sm-4 {
        padding-right: 0 !important;
    }

    .mdl-card__title {
        text-align: center;
    }

    .mdl-grid {
        text-align: center;
    }

    .mdl-card__actions {
        display: flex;
        box-sizing:border-box;
        align-items: center;
    }

    #profileText {
        width: 80%;
        margin-left: 0;
    }

    #profileSummary {
        width: 70%;
        margin-left: 40%;
        text-align: center;
    }

    #details {
        text-align: left;
    }
</style>