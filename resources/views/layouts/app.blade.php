<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="pt-br">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,600%7CMontserrat:400,700&amp;display=swap" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #navbar-mobile {
            display: none;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            margin: 10px 0 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #fCfCfC;
        }
        .fit-image {
            width: 100%;
            object-fit: cover;
        }

        .btn-warning {
            font-weight: bold;
        }

        .name-project {
            text-align: left !important;
        }

        .text-yellow {
            color: #FED605;
        }

        .bg-yellow {
            background-color: #FED605;
        }

        @media only screen and (max-width: 600px) {
            .name-project {
                text-align: center !important;
            }

            .logo {
                margin-bottom: 20px;
            }

            h3 {
                font-size: 1.3rem;
                margin: 2px 5px;
            }
            h5 {
                font-size: 0.8rem;
                font-weight: bold;
            }

            #navbar-mobile {
                display: block;
            }

            #footer-menus {
                display: none;
            }

            .footer div > div {
                margin-bottom: 30px;
            }

            .footer div {
                width: 100% !important;
            }
        }
    </style>

    <link rel="stylesheet" href="{{ asset('style\navbar-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style\subnavbar-style.css') }}">

    <title>Centro Academico Direito Unesc</title>
    @yield('style')
</head>
<body>
<x-nav-bar></x-nav-bar>

@yield('content')

<x-footer></x-footer>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

@stack('scripts')
</body>
</html>
