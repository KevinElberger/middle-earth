@extends('app')

@section('content')

    <br/>
    <br/>
    <div class="cont">
        <img src="{{ $url }}" alt="profile image" />
        <h1>{{ ucfirst($user['name']) }}'s Profile</h1>
        @if(\Auth::user()->name == $user['name'])
            <button id="editProfile" class="btn btn-primary">Edit Profile</button>
        @endif
        <hr />
        <div id="innercontainer">
            {{-- If user has a profile, display it. --}}
            @if(!is_null($prof))
                <div class="well" id="profileText">
                    {{ $prof->profile }}
                </div>
            @endif
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
            // Add text area and save button when edit profile button is clicked.
            // Also removes the edit button upon click.
            if($('#profileText').text() == '') {
                $('#editProfile').click(function () {
                    $('#innercontainer').append(
                            '<div id="profileContent"><br/>' +
                            '<form action="http://localhost:8888/profiles/index/{{ $user->id }}" method="post">' +
                            '<textarea name="profile" id ="profile" class="form-control" placeholder="Edit your profile" />' +
                            '<br/><br/>' +
                            '<input type="submit" id="saveContent" class="btn btn-primary form-control" value="submit"/>' +
                            '<input type="hidden" name="_token" value="{{ csrf_token() }}"></form>' +
                            '</div>'
                    );
                    var button = document.getElementById('editProfile');
                    button.parentNode.removeChild(button);
                });
                // If user already has a profile, change form for patch.
            } else {
                $('#editProfile').click(function() {
                    $('#innercontainer').append(
                            '<div id="profileContent"><br/>' +
                                '<form action="http://localhost:8888/profiles/update" method="post">' +
                                    '<textarea name="profile" id ="profile" class="form-control" placeholder="Edit your profile" />' +
                                    '<br/><br/>' +
                                '<input type="submit" id="saveContent" class="btn btn-primary form-control" value="submit"/>' +
                                '<input type="hidden" name="_token" value="{{ csrf_token() }}"></form>' +
                            '</div>'
                    );
                    var button = document.getElementById('editProfile');
                    button.parentNode.removeChild(button);
                });
            }
        }());
    </script>
@endsection

<style>
    h1 {
        text-align: center;
    }

    .cont {
        text-align: center;
        padding-top: 20px;
    }
</style>