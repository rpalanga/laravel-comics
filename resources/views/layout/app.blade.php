<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials/header')

    <main>  

        @yield('content')

    </main>

    @include('partials/footer')

    
</body>
</html>