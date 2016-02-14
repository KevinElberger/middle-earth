{{--<!DOCTYPE html>--}}
{{--<html>--}}
    {{--<head>--}}
        {{--<title>Laravel</title>--}}

        {{--<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">--}}
        {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">--}}
    {{--</head>--}}
    {{--<body>--}}
        {{--<div class="container">--}}
            {{--<div class="content">--}}
                {{--<div id="animated-example" class="animated fadeInUp">--}}
                    {{--<img src="{{ asset('assets/images/480_logo.png') }}" />--}}
                    {{--<div class="title"><b>Middle Earth</b></div>--}}
                {{--</div>--}}

                {{--<hr />--}}

                {{--<div id="animated-example" class="animated fadeIn">--}}
                        {{--@if(\Auth::user())--}}
                            {{--<div class="btn-group" role="group">--}}
                                {{--<a href="/articles">--}}
                                    {{--<button type="button" class="btn btn-default btn-lg">Home</button>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--@else--}}
                            {{--<div class="btn-group" role="group">--}}
                                {{--<a href="/auth/login">--}}
                                    {{--<button type="button" class="btn btn-default btn-lg">Log In</button>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                            {{--<div class="btn-group" role="group">--}}
                                {{--<a href="/auth/register">--}}
                                    {{--<button type="button" class="btn btn-default btn-lg">Sign Up</button>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</body>--}}
{{--</html>--}}

{{--<style>--}}
    {{--html, body {--}}
        {{--height: 100%;--}}
    {{--}--}}

    {{--body {--}}
        {{--margin: 0;--}}
        {{--padding: 0;--}}
        {{--width: 100%;--}}
        {{--display: table;--}}
        {{--font-weight: 100;--}}
        {{--font-family: 'Lato';--}}
    {{--}--}}

    {{--.container {--}}
        {{--text-align: center;--}}
        {{--display: table-cell;--}}
        {{--vertical-align: middle;--}}
    {{--}--}}

    {{--.content {--}}
        {{--text-align: center;--}}
        {{--display: inline-block;--}}
    {{--}--}}

    {{--.title {--}}
        {{--font-size: 96px;--}}
    {{--}--}}

    {{--.animated {--}}
        {{---webkit-animation-duration: 3s;--}}
        {{--animation-duration: 3s;--}}
        {{---webkit-animation-fill-mode: both;--}}
        {{--animation-fill-mode: both;--}}
    {{--}--}}

    {{--@-webkit-keyframes fadeInUp {--}}
        {{--0% {--}}
            {{--opacity: 0;--}}
            {{---webkit-transform: translateY(-80px);--}}
        {{--}--}}
        {{--100% {--}}
            {{--opacity: 1;--}}
            {{---webkit-transform: translateY(40);--}}
        {{--}--}}
    {{--}--}}

    {{--@keyframes fadeInUp {--}}
        {{--0% {--}}
            {{--opacity: 0;--}}
            {{--transform: translateY(-80px);--}}
        {{--}--}}
        {{--100% {--}}
            {{--opacity: 1;--}}
            {{--transform: translateY(40);--}}
        {{--}--}}
    {{--}--}}

    {{--.fadeInUp {--}}
        {{---webkit-animation-name: fadeInUp;--}}
        {{--animation-name: fadeInUp;--}}
    {{--}--}}

    {{--@-webkit-keyframes fadeIn {--}}
        {{--0% {opacity: 0;}--}}
        {{--100% {opacity: 1;}--}}
    {{--}--}}
    {{--@keyframes fadeIn {--}}
        {{--0% {opacity: 0;}--}}
        {{--100% {opacity: 1;}--}}
    {{--}--}}
    {{--.fadeIn {--}}
        {{---webkit-animation-name: fadeIn;--}}
        {{--animation-name: fadeIn;--}}
    {{--}--}}
{{--</style>--}}
        <!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700,500' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
    <div class="content">
        <div id="animated-example" class="animated fadeInUp">
            <img src="{{ asset('assets/images/logo3_.png') }}" />
            <div class="title"><b>Middle Earth</b></div>
        </div>

        <hr />

        <div id="animated-example" class="animated fadeIn">
            @if(\Auth::user())
                <div class="btn-group" role="group">
                    <a href="/articles">
                        <button type="button" class="btn btn-default btn-lg">Home</button>
                    </a>
                </div>
            @else
                <div class="btn-group" role="group">
                    <a href="/auth/login">
                        <button type="button" class="btn btn-default btn-lg">Log In</button>
                    </a>
                </div>

                <div class="btn-group" role="group">
                    <a href="/auth/register">
                        <button type="button" class="btn btn-default btn-lg">Sign Up</button>
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
</div>
</body>
</html>

<style>

    html, body, div, span, applet, object,
    iframe, h1, h2, h3, h4, h5, h6, p,
    blockquote, pre, a, abbr, acronym,
    address, big, cite, code, del, dfn,
    em, font, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt,
    var, b, u, i, center, dl, dt, dd, ol,
    ul, li, fieldset, form, label, legend,
    caption {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
        background: transparent;
    }
    html, body {
        height: 100%;
        background-color:rgba(128,128,128,0.6);
    }

    body {
        background-image:url("assets/images/congruent_outline.png");
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 700;
        font-family: 'Ubuntu', sans-serif;
    }

    .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    .content {
        text-align: center;
        display: inline-block;
    }

    .title {
        font-size: 96px;
        color:white;
    }

    .animated {
        -webkit-animation-duration: 3s;
        animation-duration: 3s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInUp {
        0% {
            opacity: 0;
            -webkit-transform: translateY(-80px);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateY(40);
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(-80px);
        }
        100% {
            opacity: 1;
            transform: translateY(40);
        }
    }

    .fadeInUp {
        -webkit-animation-name: fadeInUp;
        animation-name: fadeInUp;
    }

    @-webkit-keyframes fadeIn {
        0% {opacity: 0;}
        100% {opacity: 1;}
    }
    @keyframes fadeIn {
        0% {opacity: 0;}
        100% {opacity: 1;}
    }
    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }
</style>