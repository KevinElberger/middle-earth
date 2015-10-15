@extends('app')

@section('content')
    <h1>About Us</h1>

    <hr />

    <div class="col-md-6 col-md-offset-3">

        <div id="firstLogo">
            <img src="{{ asset('assets/images/Gandalf') }}" alt="..." class="img-rounded">
        </div>

        <div class=".title">
            <h3><b>The Team</b></h3>
        </div>

        <hr />

        <p>We're a group of senior CIT students at CSUN working on our CIT 480 (senior design) project!</p>

    </div>
@stop

<style>
    h1 {
        text-align: center;
    }

    h3 {
        text-align: center;
    }

    .col-md-offset-3 {
        height: 80%;
        overflow: auto;
        overflow-x:hidden;
    }

    img {
        display: block;
        margin: 0 auto;
    }
</style>