<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>GifBase</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        Token: {{ csrf_token() }}<br />
        <hr />

        <div id="app" class="container">
            <nav class="nav has-shadow">
                <div class="nav-left">
                    <div class="nav-item">GifBase</div>
                </div>

                <div class="nav-center">
                    <div class="nav-item" v-for="navCategory in navCategories"><a href="">@{{ navCategory.name }}</a></div>
                </div>
            </nav>

            @yield('content')
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
