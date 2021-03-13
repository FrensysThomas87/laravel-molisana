



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel Molisana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  </head>
  <body>
    {{-- header --}}
    @include('partials.header')
    {{-- end header --}}

    {{-- main --}}
    <main>
      <h1>LE LUNGHE</h1>
      <div class="kind-pasta-container">
        @foreach ($pastaArray as $key => $pasta)
          @if ($pasta['tipo'] === 'lunga')
            <div class="img-pasta">
              <a href="/product-details/{{$key + 1}}">
                <img src="{{$pasta['src']}}" alt="">
              </a>
            </div><br/>
          @endif
        @endforeach
      </div>

        <h1>LE CORTE</h1>
        <div class="kind-pasta-container">
          @foreach ($pastaArray as $key => $pasta)
            @if ($pasta['tipo'] === 'corta')
              <div class="img-pasta">
                <a href="/product-details/{{$key + 1}}">
                  <img src="{{$pasta['src']}}" alt="">
                </a>
              </div>
            @endif
          @endforeach
        </div>

        <h1>LE CORTISSIME</h1>
        <div class="kind-pasta-container">
          @foreach ($pastaArray as $key => $pasta)
            @if ($pasta['tipo'] === 'cortissima')
              <div class="img-pasta">
                <a href="/product-details/{{$key + 1}}">
                  <img src="{{$pasta['src']}}" alt="">
                </a>
              </div>
            @endif
          @endforeach
        </div>
      </main>
      {{-- end main --}}

      {{-- footer --}}
      @include('partials.footer')
      {{-- end footer --}}



  </body>
</html>
