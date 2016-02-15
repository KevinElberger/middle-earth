<!doctype HTML>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    </head>
        <body>
            @include('partials.header')

            <div class="container">
                @include('flash::message')

                @yield('content')


            @yield('footer')
            </div>

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
                        <a href="/about">About</a>
                        ·
                        <a href="/contact">Contact</a>
                    </p>

                    <p>Middle Earth &copy; 2015</p>
                </div>

            </footer>
                <script src="//code.jquery.com/jquery.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
                <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

                <script type="text/javascript">
                    $('#tag_list').select2({
                        placeholder: 'Choose a tag',
                        tags: false,
                        maximumSelectionLength: 1,
                    });

                    $('div.alert').not('.alert-important').delay(3000).slideUp(400);
                </script>
        </body>
    </html>

<style>
    html,
    body {
        position: relative;
    }
    body {
        margin: 0 0 140px; /* bottom = footer height */
    }
    footer {
        /*position: absolute;*/
        padding-top: 10px;
        height: 140px;
        width: 100%;
        bottom: 0;
        left: 0;
        background-repeat: repeat;
        background-attachment: scroll;
        background-position: 0% 0%;
        position: fixed;
    }

    li {
        text-align: center;
    }

    .container {
        padding-top: 40px;
        padding-bottom: 10px;
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