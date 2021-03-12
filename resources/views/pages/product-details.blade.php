

{{-- questa è la pagina prodotto {{ $idProduct }}

{{ $pastaArray[$idProduct - 1]['descrizione'] }} --}}

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  </head>
  <body>
    {{-- header --}}
    @include('partials.header')
    {{--end header --}}
      <main id="product-main">
        <h1>{{$pastaArray[$idProduct - 1]['titolo']}}</h1>
        <img src={{$pastaArray[$idProduct - 1]['src-h']}} alt="">
        <img src={{$pastaArray[$idProduct - 1]['src-p']}} alt="">
        <p>{!!$pastaArray[$idProduct - 1]['descrizione']!!}</p>
        <div class="chevron-left">
          <i class="fas fa-chevron-left"></i>
        </div>
        <div class="chevron-right">
          <i class="fas fa-chevron-right"></i>
        </div>
      </main>



    {{-- footer --}}
    @include('partials.footer')
    {{-- end footer --}}
  </body>
</html>
