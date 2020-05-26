<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">

    <title>Centro Academico Direito Unesc</title>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        #navbar {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        #navbar a:visited, a:link, a:hover, a:active {
            color: black;
        }

        #navbar .center * {
            margin: 0;
            text-align: center;
        }

        #navbar .social_networks {
            display: flex;
            flex-wrap: nowrap;
            border-radius: 10px;
        }

        #navbar .social_networks div {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 30px;
            height: 30px;
            margin: 3px;
            background-color: #FED605;
            border-radius: 5px;
        }

        #navbar .logo {
            width: 120px;
            height: 120px;
        }

        nav hr {
            background-color: red;
        }

        @media only screen and (max-width: 768px) {
            #navbar {
                display: block;
            }

            #navbar div {
                display: flex;
                flex-wrap: nowrap;
                justify-content: center;
            }
            #navbar .center {
                display: flex;
                flex-wrap: wrap;
                padding: 5px 5px;
            }
        }
    </style>

    @yield('style')
</head>
<body>
<x-navbar></x-navbar>
@yield('content')

@yield('scripts')
</body>
</html>
