<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            color: navy;
            font-family: 'Nunito', sans-serif;
            padding: 2em;
        }
    </style>
    <title>Laravel 8 Sandox</title>
</head>
<body>
    <p>Laravel 8 Sandbox</p>
    @yield('banner')
    @yield('content')
    
</body>
</html>