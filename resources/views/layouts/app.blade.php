<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
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
        @media only screen and (max-width: 600px) {
            h1 {
                font-size: 1.7rem;
                margin: 2px 5px;
            }
            h3 {
                font-size: 1rem;
                font-weight: bold;
            }
        }
    </style>

    <link rel="stylesheet" href="{{ asset('style\navbar-style.css') }}">
    <link rel="stylesheet" href="{{ asset('style\subnavbar-style.css') }}">

    <title>Centro Academico Direito Unesc</title>
    @yield('style')
</head>
<body>
<x-navbar></x-navbar>
@yield('content')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

@stack('scripts')
</body>
</html>
