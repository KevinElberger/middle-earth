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
                        <a href="/profiles/index/{{ ucfirst(\Auth::user()->id) }}" class="disabled" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ ucfirst(\Auth::user()->name) }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
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
    @include('profiles/edit')
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

    .dropdown:hover .dropdown-menu {
        display: block;
    }
    .dropdown-menu {
        margin-top: 0px;
    }
</style>