<?php
  if (isset($_POST['themeSelect']) && $_POST['themeSelect'] != "") {
    $value = $_POST['themeSelect'];
    session()->put('ThemeSelected',$value);
  }
  else if (session()->get('ThemeSelected') != false) {
    //try this out shouldnt need to do anything...
  }
  else{
    $value = false;
    session()->put('ThemeSelected',$value);
  }
?>

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

        <?php
          if (session('ThemeSelected') == 0) {
            echo "<link rel='stylesheet' href='css/theme/dark-theme.css' media='screen' title='Default Theme'>";
          }
          else if (session('ThemeSelected') == 1) {
            echo "<link rel='stylesheet' href='css/theme/dark-theme.css' media='screen' title='Dark Theme'>";
          }
          else if (session('ThemeSelected') == 2){
            echo "<link rel='stylesheet' href='css/theme/light-theme.css' media='screen' title='Light Theme'>";
          }
          else {
            echo "<link rel='stylesheet' href='css/theme/dark-theme.css' media='screen' title='Default Theme'>";
          }
        ?>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @include('partial.nav')
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
