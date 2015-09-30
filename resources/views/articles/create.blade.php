@extends ('app')

@section('content')

    <!-- Navigation bar -->

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
                <a class="navbar-brand" href="#"><b>Middle Earth</b></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="login">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br/>

    <!-- End navigation bar -->

    <br/>

    <h1>Create an Article</h1>

    {!! Form::open(['url' => 'articles']) !!}
        @include ('articles.form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}

    @include ('errors.list')
@stop