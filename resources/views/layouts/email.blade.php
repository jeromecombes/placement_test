<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style type='text/css'>
        .navbar-brand {
            font-size: 1.8em;
        }

        .intro {
            font-style: italic;
        }

        .content {
            color: #000000;
            font-size: 12pt;
            text-align: justify;
        }

        .content h1 {
            margin-top: 70px;
            font-size: 16pt;
            font-weight: bold;
        }

        .info tr {
            height: 35px;
        }

        .info td:first-child {
            white-space: nowrap;
        }

        .info tr > td:first-child {
            text-transform: uppercase;
        }

        .info tr:last-child > td {
            text-transform: none;
        }

        .links {
            margin-top: 60px;
            width: 100%;
            font-size: 12pt;
            text-align: center;
            color: #777;
        }

        .answer-ok,
        .score {
            font-weight: bold;
            color: green;
        }

        .answer-error {
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <p class="navbar-brand">
                        {{ config('app.name', 'Laravel') }}
                    </p>
                </div>
            </div>
        </nav>
       @yield('content')

        <div class="links">
            Created by <a href='http://jeromecombes.com'>jeromecombes.com</a>
        </div>

    </div>
</body>
</html>
