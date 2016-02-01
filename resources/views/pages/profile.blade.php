@extends('app')

@section('content')

    <br/>
    <br/>
    <div class="container">

        <img src="{{ $url }}" alt="profile image" />
        <hr />
        <h1>{{ $user['name'] }}'s Profile</h1>

        @if(\Auth::user()->name == $user['name'])
            <button id="editProfile" class="btn btn-primary">Edit Profile</button>
        @endif
    </div>
@endsection

<style>
    h1 {
        text-align: center;
    }

    .container {
        text-align: center;
    }
</style>

<script>
    $(function() {
        
    })
</script>