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
            <a href="blog"><img src="{{ Vite::asset('resources/images/LEGOLAND_PARKS_LOGO.svg') }}" alt="Legoland Logo"></a>
            <ul>
                <li>
                    <a href="tickets">TICKETS</a>
                </li>
                <li>
                    <a href="contact">CONTACT</a>
                </li>
                <li>
                    <a href="attracties">ATTRACTIES</a>
                </li>
                <li>
                    <a href="openingstijden">OPENINGSTIJDEN</a>
                </li>
                <li>
                    <a href="accommodaties">ACCOMMODATIES</a>
                </li>
            </ul>
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
