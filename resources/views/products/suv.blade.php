<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SUV</title>

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
                <h3 class="title">
                  SUV
                </h3>
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/SUVs/2013fordexplorer.jpg" alt="2013 Ford Explorer">
                      <div class="caption">
                        <h3>2013 Ford Explorer</h3>
                        <p>This is a placeholder description</p>
                        <p>
                          <a href="#" class="btn btn-primary" role="buton">Add to cart</a>
                          <a href="#" class="btn btn-default" role="button">Test Drive this car</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/SUVs/2014jeepgcherokee.jpg" alt="2014 Jeep Grand Cherokee">
                      <div class="caption">
                        <h3>2014 Jeep Grand Cherokee</h3>
                        <p>This is a placeholder description</p>
                        <p>
                          <a href="#" class="btn btn-primary" role="buton">Add to cart</a>
                          <a href="#" class="btn btn-default" role="button">Test Drive this car</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/SUVs/2006toyota4runner.jpg" alt="2006toyota4runner">
                      <div class="caption">
                        <h3>2006 Toyota 4runner</h3>
                        <p>This is a placeholder description</p>
                        <p>
                          <a href="#" class="btn btn-primary" role="buton">Add to cart</a>
                          <a href="#" class="btn btn-default" role="button">Test Drive this car</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
    </body>
</html>
