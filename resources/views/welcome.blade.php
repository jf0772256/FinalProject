<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- themeStyles -->
        <style>
            html, body {
                background-color: #2b3e50;
                color: #ebebeb;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ebebeb;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <link rel="stylesheet" href="css/theme/dark-theme.css" media="screen" title="no title">
    </head>
    <body>

        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
            <div class="top-left links">
              <a href="/">Home</a>
                <a href="/cars">Cars</a>
                <a href="/trucks">Trucks</a>
                <a href="/suv">SUV</a>
                <a href="/compacts">Compacts</a>
                <a href="/electric">Electric/Hybrid</a>
            </div>
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content" id="app">
                <jumbotron></jumbotron>
                <div class="title m-b-md">
                    Bob's Used Cars
                </div>
                <div class="links">
                    <a href="/cars">Cars</a>
                    <a href="/trucks">Trucks</a>
                    <a href="/suv">SUV</a>
                    <a href="/compacts">Compacts</a>
                    <a href="/electric">Electric/Hybrid</a>
                </div>
            </div>
        </div>
    </body>
</html>
