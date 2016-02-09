@extends('app')

@section('content')

    <br/>
    <br/>
    <div class="container">
        <img src="{{ $url }}" alt="profile image" />
        <h1>{{ $user['name'] }}'s Profile</h1>
        @if(\Auth::user()->name == $user['name'])
            <button id="editProfile" class="btn btn-primary">Edit Profile</button>
        @endif
        <hr />
        <div id="container"></div>
    </div>

    <script type="text/javascript">
        $(function() {
            $('#editProfile').click(function() {
                $('#container').append(
                        '<div id="profileContent"><br/><textarea name="profile" class="form-control" placeholder="Edit your profile" />' +
                        '<br/><br/><button id="saveContent" class="btn btn-primary">Save</button></div>'
                );
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