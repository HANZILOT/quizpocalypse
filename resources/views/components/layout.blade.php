<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QuizPocalypse</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">

    <script src="{{ asset('js/script.js') }}"></script>

    <script src="{{ asset('js/alpine.js') }}"></script>

    <!-- Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

</head>

<body>
    <h1 class="text-center bg-warning text-dark py-3">QuizPocalypse</h1>
    <div class="container py-4">
        {{ $slot }}
    </div>
</body>

</html>
