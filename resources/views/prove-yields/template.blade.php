<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    @include('partials.header')
      <main>
        @yield('content-1')
        @yield('content-2')
      </main>
    @include('partials.footer')
  </body>
</html>
