@extends('app')

@section('content')

    <br/>
    <br/>
    <div class="container">
{{--        {{dd($user)}}--}}
        <img src="{{ $url }}" alt="profile image" />
        <h1>{{ $user['name'] }}'s Profile</h1>
        @if(\Auth::user()->name == $user['name'])
            <button id="editProfile" class="btn btn-primary">Edit Profile</button>
        @endif
        <hr />
        <div id="innercontainer">
            {{-- If user has a profile, display it. --}}
            @if(!is_null(\Auth::user(['profile'])))
                <div class="well" id="profileText">
                    {{ \Auth::user()->profile }}
                </div>
            @endif
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
            // Add text area and save button when edit profile button is clicked.
            // Also removes the edit button upon click.
            $('#editProfile').click(function() {
                $('#innercontainer').append(
                        '<div id="profileContent"><br/>' +
                        '<form action="http://localhost:8888/pages/profile/store" method="post">' +
                        '<textarea name="profile" id ="profile" class="form-control" placeholder="Edit your profile" />' +
                        '<br/><br/>' +
                        '<input type="submit" id="saveContent" class="btn btn-primary form-control" value="submit"/>' +
                        '<input type="hidden" name="_token" value="{{ csrf_token() }}"></form>' +
                        '</div>'
                );
                var button = document.getElementById('editProfile');
                button.parentNode.removeChild(button);
            });
        }());
    </script>
@endsection

<style>
    h1 {
        text-align: center;
    }

    .container {
        text-align: center;
    }
</style>