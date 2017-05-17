<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trucks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {

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

                display: flex;
              /justify-content: center;
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

                  <div class="content">
                    <div class="jumbotron page-header">
                      <div class="title ">
                          Bob's Used
                      </div>
                      <h2 class="title">
                        Trucks
                      </h2>
                    </div>

    <div class="flex-center position-ref full-height">
      <div class="content">
          @include('partial.nav')
                <div class="row">
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/Trucks/1942dodgemilitary1-4ton.jpg" alt="1942 Dodge Military 4 Ton">
                      <div class="caption">
                        <h3>1942 Dodge Military - 4 Ton</h3>
                        <p> | $5,000 | </p>
                        <p>
                          <a href="#" class="btn btn-primary" role="button">Add to cart</a>
                          <a href="#" class="btn btn-default" role="button">Test Drive this car</a>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/Trucks/1959bluechevyputruck.jpg" alt="1959 Chevy Truck">
                      <div class="caption">
                        <h3>1959 Chevy Truck</h3>
                        <p>| $32,500 |</p>
                        <p>
                          <a href="#" class="btn btn-primary" role="button">Add to cart</a>
                          <a href="#" class="btn btn-default" role="button">Test Drive this car</a>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/Trucks/1995fordranger.jpg" alt="1995 Ford Ranger">
                      <div class="caption">
                        <h3>1995 Ford Ranger</h3>
                        <p>| $10,500 |</p>
                        <p>
                          <a href="#" class="btn btn-primary" role="button">Add to cart</a>
                          <a href="#" class="btn btn-default" role="button">Test Drive this car</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/Trucks/1999fordf250diesel.jpg" alt="1999 Ford F250">
                      <div class="caption">
                        <h3>1999 Ford F250</h3>
                        <p>| $11,000 |</p>
                        <p>
                          <a href="#" class="btn btn-primary" role="button">Add to cart</a>
                          <a href="#" class="btn btn-default" role="button">Test Drive this car</a>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/Trucks/2003toyotatundra.jpg" alt="2003 Toyota Tundra">
                      <div class="caption">
                        <h3>2003 Toyota Tundra</h3>
                        <p>| $15,950 |</p>
                        <p>
                          <a href="#" class="btn btn-primary" role="button">Add to cart</a>
                          <a href="#" class="btn btn-default" role="button">Test Drive this car</a>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-sm-4">
                    <div class="thumbnail">
                        <img src="/images/Trucks/2012ford350diesel.jpg" alt="2012 Ford F350">
                      <div class="caption">
                        <h3>2012 Ford F350</h3>
                        <p>| $30,000 |</p>
                        <p>
                          <a href="#" class="btn btn-primary" role="button">Add to cart</a>
                          <a href="#" class="btn btn-default" role="button">Test Drive this car</a>
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/Trucks/whitepickupwlumberrack.jpg" alt="white pickup with lumber rack">
                      <div class="caption">
                        <h3>White Pickup with Lumber Rack</h3>
                        <p>| 30,000 |</p>
                        <p>
                          <a href="#" class="btn btn-primary" role="button">Add to cart</a>
                          <a href="#" class="btn btn-default" role="button">Test Drive this car</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </body>
</html>
