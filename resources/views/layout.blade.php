<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legoland</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="mw-100">
<div class="container mw-100 p-0">
    <div class="header w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index">
                <img src="{{ Vite::asset('resources/images/LEGOLAND_PARKS_LOGO.svg') }}" alt="Legoland Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="tickets">TICKETS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="attracties">ATTRACTIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="openingstijden">OPENINGSTIJDEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="accommodaties">ACCOMMODATIES</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="content">
        @yield('content')

    </div>
    <div class="footer">
        <img src="{{ Vite::asset('resources/images/LEGOLAND_PARKS_LOGO.svg') }}" alt="Legoland Logo">
        <p>&#169; Legoland</p>
    </div>
</div>
</body>
</html>
