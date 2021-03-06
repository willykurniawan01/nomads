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

    @include('includes.home.navbar-checkout')
   
    @yield('content')
    
   
    @include('includes.home.script')
  </body>
</html>
