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
            <a href="{{ url('/user') }}">Home</a>
        @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        @endif
    </div>
@endif
