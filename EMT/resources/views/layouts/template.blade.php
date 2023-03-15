<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Cambiar el cdn de boostrap y fontAwasome --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myCss.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2cf292bb20.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>

    {{-- Navabar --}}

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
