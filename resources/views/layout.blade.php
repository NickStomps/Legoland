<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legoland</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="blog"><img src="{{ Vite::asset('resources/images/LEGOLAND_PARKS_LOGO.svg') }}" alt="Legoland Logo"></a>
            <ul>
                    @if(Auth::check())
                    <li>
                        <a href="/dashboard" >DASHBOARD</a>
                    </li>
                    <li>
                        <a href="/logout" class="login">LOG OUT</a>
                    </li>
                    @else
                    <li>
                        <a href="/login" class="login">LOG IN</a>
                    </li>
                    @endif
                </li>
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