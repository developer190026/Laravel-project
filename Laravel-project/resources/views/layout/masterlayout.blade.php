<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>mypage - @yield('title','website')</title>
<link rel="stylesheet" href={{ asset('css/custom.css')}}>

@stack('style')
</head>
<body>

  <header>
    <h1>Web Page</h1>
  </header>

  <div class="container">
    <nav>
        <h3>Sidebar</h3>
        @section('sidebar')
        <ul>
          <nav>
            <h3>Sidebar</h3>
            <ul>
              <li><a href="{{ route('welcome')}}">Home</a></li>
              <li><a href="{{ route('about')}}">About</a></li>
              <li><a href="{{ route('services')}}">Services</a></li>
              <li><a href="{{ route('contact')}}">Contact</a></li>
              <li><a href="{{ route('blade')}}">Blade directives</a></li>
              <li><a href="{{ route('users')}}">users</a></li>
              
            </ul>
          </nav>
          
    @show
        </ul>
      </nav>
    

    <main>
    @yield('content','no contect found')


    {{-- @if (View::hasSection('new'))
    @yield('new')
@else
    <p>No content found</p>
@endif --}}

</main>
  </div>

  <footer>
    <p>Copyright © 2025 My Website</p>
  </footer>
@stack('scripts')
</body>
</html>
