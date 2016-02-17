@extends('app')
    <br/>
    <br/>
    <div class="container">
        <img src="{{ $url }}" alt="profile image" />
        <h1>{{ ucfirst($user['name']) }}'s Profile</h1>
        <hr />
        {{-- If user has a profile, display it. --}}
        @if(is_null($prof))
            <p>There's nothing here! Edit your profile to add a bio.</p>
        @endif
        <div class="jumbotron" style="background:transparent !important" id="profileText">
            <h3><b>Bio:</b></h3>
            {{ $prof->profile }}
            <br/>
            <hr />
            <br />
            <h3><b>Articles:</b></h3>
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
                            <td>{{$article->created_at}}</td>
                            <td>{{$article->tag_list}}</td>
                        </tr>
                    @endforeach
                </table>
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

</style>