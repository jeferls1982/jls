<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Jeferson Luis Silveira">
       
        <title>Exemplo ecommerce</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
        @include('loja.scripts.css')


        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->

        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        <link href="{{ asset('css/album.css') }}" rel="stylesheet">
    </head>
    <body>
        @yield('content')
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
        <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="{{ asset('js/dashboard.js') }}"></script>
    </body>
    
</html>