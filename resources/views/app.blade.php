<!doctype HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
        <body>
            @include('partials.header')

            <div class="container">
                @include('flash::message')

                @yield('content')
            </div>

            <script src="//code.jquery.com/jquery.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

            <script>
                $('div.alert').not('.alert-important').delay(3000).slideUp(400);

            </script>
            @yield('footer')

            <footer class="footer-distributed">

                <div class="footer-right">

                    {{-- Maybe for future use --}}

                    {{--<a href="#"><i class="fa fa-facebook"></i></a>--}}
                    {{--<a href="#"><i class="fa fa-twitter"></i></a>--}}
                    {{--<a href="#"><i class="fa fa-linkedin"></i></a>--}}
                    {{--<a href="#"><i class="fa fa-github"></i></a>--}}

                </div>

                <div class="footer-left">

                    <p class="footer-links">
                        <a href="#">Home</a>
                        ·
                        <a href="#">About</a>
                        ·
                        <a href="#">Faq</a>
                        ·
                        <a href="#">Contact</a>
                    </p>

                    <p>Middle Earth &copy; 2015</p>
                </div>

            </footer>
        </body>
</html>

<style>
    html {
        position: relative;
        min-height: 100%;
    }
    body {
        margin: 0 0 140px; /* bottom = footer height */
    }
    footer {
        position: absolute;
        padding-top: 10px;
        height: 140px;
        width: 100%;
        bottom: 0;
        left: 0;
    }

    .container {
        position: relative;
        transform: translateY(5%);
    }

    .footer-distributed{
        background-color: #ececec;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: normal 16px sans-serif;
        padding: 45px 50px;
        margin-top: 80px;
    }

    .footer-distributed .footer-left p{
        color:  #8f9296;
        font-size: 14px;
        margin: 0;
    }

    .footer-distributed p.footer-links{
        font-size:18px;
        font-weight: bold;
        margin: 0 0 10px;
        padding: 0;
    }

    .footer-distributed p.footer-links a{
        display:inline-block;
        line-height: 1.8;
        text-decoration: none;
        color:  inherit;
    }

    .footer-distributed .footer-right{
        float: right;
        margin-top: 6px;
        max-width: 180px;
    }

    .footer-distributed .footer-right a{
        display: inline-block;
        width: 35px;
        height: 35px;
        background-color:  #33383b;
        border-radius: 2px;

        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;
        margin-left: 3px;
    }
</style>