

@if (Route::has('login'))
    <nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="container" >
              <ul class="nav nav-tabs">
                  <li>  <a href="{{url('/')}}">Home</a> </li>
                  <li>  <a href="/cars">Cars</a> </li>
                  <li>  <a href="/trucks">Trucks</a> </li>
                  <li>  <a href="/suv">SUV</a> </li>
                  <li>  <a href="/compacts">Compacts</a> </li>
                  <li>  <a href="/electric">Electric/Hybrid</a> </li>

            <!-- /.navbar-collapse -->
            <!-- Collect the nav links, forms, and other content for toggling -->

        @if (Auth::check())
            <li ><a href="{{ url('/user') }}">Dashboard</a> </li>
        @else
            <li><a href="{{ url('/login') }}">Login</a> </li>
            <li> <a href="{{ url('/register') }}">Register</a> </li>
          </ul>
        </div><!-- /.navbar-collapse -->
        @endif
<p>
  Bob's Used Cars &copy; 2017
</p>
  </div>
</nav>
      @endif
