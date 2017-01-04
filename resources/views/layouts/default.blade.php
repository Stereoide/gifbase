<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GifBase</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
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

        <script src="js/app.js"></script>
    </body>
</html>
