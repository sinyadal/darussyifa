<!DOCTYPE html>
  <html lang="en">

  <head>
    @include('partials._head')
  </head>
    
  <body>

    @include('partials._navbar')
    
    @yield('content') <!-- about, contact, home -->

    @include('partials._footer')
    
  </body>
</html>