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

            <div class="content">
              <div class="jumbotron page-header">
                <div class="title ">
                    Bob's Used
                </div>
                <h2 class="title">
                  Cars
                </h2>
              </div>
              <div class="flex-center position-ref full-height">
                  @include('partial.nav')
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/Cars/1992fordescort.jpg" alt="1992 Ford Escort">
                      <div class="caption">
                        <h3>1992 Ford Escort</h3>
                        <p>This is a placeholder description</p>
                        <p><a href="#" class="btn btn-primary" role="buton">Add to cart</a> <a href="#" class="btn btn-default" role="button">Test Drive this car</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/images/Cars/1995mazdamiata.jpg" alt="1995 mazda miata">
                      <div class="caption">
                        <h3>1995 Mazda Miata</h3>
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
                        <img src="/images/Cars/2005toyotacorolla.jpg" alt="2005 Toyota Carolla">
                      <div class="caption">
                        <h3>2005 Toyota Corolla</h3>
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
                        <img src="/images/Cars/2006bmw3series.jpg" alt="2006 BMW 3 Series">
                      <div class="caption">
                        <h3>2006 BMW 3 Series</h3>
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
                        <img src="/images/Cars/2010hondaaccord.jpg" alt="2010 honda accord">
                      <div class="caption">
                        <h3>2010 Honda Accord</h3>
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
