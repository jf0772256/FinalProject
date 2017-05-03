
<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="nav navbar-right">
        @include('partial.theme')
        <div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav ">
              <li>  <a href="{{url('/')}}">Home</a> </li>
              <li>  <a href="/cars">Cars</a> </li>
              <li>  <a href="/trucks">Trucks</a> </li>
              <li>  <a href="/suv">SUV</a> </li>
              <li>  <a href="/compacts">Compacts</a> </li>
              <li>  <a href="/electric">Electric/Hybrid</a> </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
</nav>

@if (Route::has('login'))
    {{-- <nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav> --}}


    <nav class="navbar navbar-fixed-top">

      <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <li>  <a href="{{url('/')}}">Home</a> </li>
                  <li>  <a href="/cars">Cars</a> </li>
                  <li>  <a href="/trucks">Trucks</a> </li>
                  <li>  <a href="/suv">SUV</a> </li>
                  <li>  <a href="/compacts">Compacts</a> </li>
                  <li>  <a href="/electric">Electric/Hybrid</a> </li>

            <!-- /.navbar-collapse -->
            <!-- Collect the nav links, forms, and other content for toggling -->

        @if (Auth::check())
            <li ><a href="{{ url('/user') }}">Home</a> </li>
        @else
            <li><a href="{{ url('/login') }}">Login</a> </li>
            <li> <a href="{{ url('/register') }}">Register</a> </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
        @endif
  </div>
</nav>
      @endif
