@extends('app')

<div class="container">
    <div id="name">

        <img src="{{ asset('assets/images/logo3_.png') }}"  width="200px" height="200px"/><p><span style="color:white"> Middle Earth</span></p>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <br />
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success btn-primary"><span style="color: white">Login</button>
                                <a class="btn btn-link" href="{{ url('/password/email') }}"><span style="color:green">Forgot Your Password?</span></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

    .container{
        width:100%;
    }

    body{
        background-image:url("/assets/images/congruent_outline.png");
    }




    .row {
        margin-top:30px;
        position: relative;
        transform: translateY(1%);
    }

    #name{
        padding-top: 20px;
        text-align: center;
        font-size:40px;
        margin-top:50px;
    }

    span p{
        font-weight: 700;
        font-family: 'Ubuntu', sans-serif;
    }

</style>