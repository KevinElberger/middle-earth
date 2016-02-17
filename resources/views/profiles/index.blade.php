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

                            <p><small>Location: {{ $prof->location }}</small></p>
                        @else
                            <p><small>Location: N/A</small></p>
                        @endif
                        <p><small>Joined on: {{ $user->created_at->format('m/d/Y') }}</small></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="jumbotron" style="background:transparent !important" id="profileText">
                    <h3><b>Bio</b></h3>
                    @if(is_null($prof))
                        <p>There's nothing here! Edit your profile to add a bio.</p>
                    @else
                        {{ $prof->profile }}
                    @endif
                    <br />
                    <hr />
                    <h3><b>Articles</b></h3>
                    <div class="articles">
                        <table class="table table-hover table-striped table-bordered table-condensed">
                            <thead>
                            <tr class="info header">
                                <td><b>Article</b></td>
                                <td><b>Created At</b></td>
                                <td><b>Tag</b></td>
                            </tr>
                            </thead>
                            @foreach($articles as $article)
                                <tr class="content">
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->created_at->format('m/d/Y')}}</td>
                                    <td>{{$article->tag_list}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style>
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

    .content {
        text-align: center;
    }

    .col-sm-4 {
        padding-right: 0 !important;
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