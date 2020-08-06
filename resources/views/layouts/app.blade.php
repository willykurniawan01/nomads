<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    
    @include('includes.home.style')
    
    @stack('addon-style')

  </head>
  <body>

    @include('includes.home.navbar')
   
    @yield('content')
    
    @include('includes.home.footer')
   
    @include('includes.home.script')

    @stack('addon-script')
  </body>
</html>
