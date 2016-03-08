@extends('app')

@section('content')

    <div class="container-fluid">
        <div id="name">
            <div class="title"><img src="{{ asset('assets/images/logo3_.png') }}" width="100px" height="100px"/> Middle Earth</div><br>
            <p>Sign up </p>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">.
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

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div><!--end col-md-6-->
                            </div><!--end form-group-->

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
                                <label class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-success btn-primary">
                                        Sign Up
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    body{
        background-image:url("/assets/images/congruent_outline.png");
    }

    .row {
        position: relative;
        top: 60%;
        transform: translateY(20%);
        margin-top:-30px;
    }

    #name{
        padding-top: 80px;
        text-align: center;
        font-size: 35px;
        font-weight: 700;
        font-family: 'Ubuntu', sans-serif;
    }

    .title {
        font-size: 35px;
        font-weight: 700;
        color:white;
        font-family: 'Ubuntu', sans-serif;
    }

    #name p{
        font-size: 30px;
        font-weight: 400;
        font-family: 'Ubuntu', sans-serif;
        color:white;
        margin-top:-20px;
    }
</style>