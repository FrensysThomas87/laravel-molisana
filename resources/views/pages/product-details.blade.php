

{{-- questa è la pagina prodotto {{ $idProduct }}

{{ $pastaArray[$idProduct - 1]['descrizione'] }} --}}

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    {{-- header --}}
    @include('partials.header')
    {{--end header --}}
      <main id="product-main">
        <img src={{$pastaArray[$idProduct - 1]['src-h']}} alt="">
        <img src={{$pastaArray[$idProduct - 1]['src-p']}} alt="">
      </main>



    {{-- footer --}}
    @include('partials.footer')
    {{-- end footer --}}
  </body>
</html>
