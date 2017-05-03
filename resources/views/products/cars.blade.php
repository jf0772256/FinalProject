<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cars</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
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

            .top-left {
                position: absolute;
                left: 10px;
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
            <div class="content">
                <div class="title m-b-md">
                    Bob's Used Cars
                </div>
                <h2 class="title">
                  Cars
                </h2>

                <h3>
                    1992 Ford Escort
                </h3>
                <p>
                    
                </p>

                <img src="\public\images\Cars\1992fordescort.jpg\" alt="1992 Ford Escort">

            </div>
        </div>
    </body>
</html>
