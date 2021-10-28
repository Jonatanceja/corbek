<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="/css/animate.css">
    @stack('styles')
    <script src="https://kit.fontawesome.com/da479675e4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>
    <script src="/js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>


    <style>
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Monstserrat', sans-serif;
        }

        p {
            font-family: 'Work Sans', sans-serif; 
        }

        h1 strong {
        color: #ED1B31;
        }

        .video iframe {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .swiper-button-next:after, .swiper-button-prev:after {
        color: #ED1B31;
        z-index: 99999;
        }
    </style>



</head>
<body>

@include('partials.nav')    
@include('partials.social')    
@yield('content')

@include('partials.footer')
<script src="{{ mix('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>
