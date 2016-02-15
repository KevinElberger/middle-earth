@if(\Auth::user())
    <?php
        $user = str_replace(' ', '', \Auth::user()->name);
        $id = \Auth::User()->id;
        $profileURL = "/profiles/index/";
        $profileURL .=  $id;
    ?>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/articles"><b>Middle Earth</b></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ ucfirst(\Auth::user()->name) }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/profiles/index/{{ \Auth::user()->id }}">Profile</a></li>
                            <li><a href="#editProfile" data-toggle="modal">Edit Profile</a></li>
                        </ul>
                    </li>
                    <li><a href="/articles/create">Create an Article</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="/auth/logout">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br/>
    <!-- Modal window for editing profile. -->
    <div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

                        </button>
                        <h4 class="modal-title" id="myModalLabel">Edit Your Profile</h4>

                    </div>
                    <div class="modal-body">
                        {!! Form::open(['url' => $profileURL]) !!}
                        {!! Form::label('profile', 'Bio:') !!}
                        {!! Form::textarea('profile', null, ['class' => 'form-control', 'placeholder' => 'Write here...']) !!}
                    </div>
                    <div class="modal-footer">
                        {!! Form::button('Close', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) !!}
                        {!! Form::submit('Save Changes', ['id' => 'littleButton', 'class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><b>Middle Earth</b></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">About</a></li>
                    <li><a href="/pages/contact">Contact Us</a></li>
                    <li><a href="/auth/login">Log In</a></li>
                    <li><a href="/auth/register">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br/>
@endif
<style>
    .modal-content {
        /* Bootstrap sets the size of the modal in the modal-dialog class, we need to inherit it */
        width:inherit;
        height:inherit;
        /* To center horizontally */
        margin: 0 auto;
        pointer-events:all;
    }

    .modal-title {
        text-align: center;
    }
</style>