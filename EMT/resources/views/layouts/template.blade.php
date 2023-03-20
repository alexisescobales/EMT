<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2cf292bb20.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    @vite(["resources/css/app.css", "resources/css/app.scss", "resources/js/app.js",])
</head>
<body>

    {{-- Navabar --}}

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
