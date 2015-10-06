<!doctype HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <body>
        <div class="container">
            @include('flash::message')

            @yield('content')
        </div>

        <script src="//code.jquery.com/jquery.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <script>
            $('div.alert').not('.alert-important').delay(3000).slideUp(200);

        </script>
        @yield('footer')
    </body>
</head>
</html>