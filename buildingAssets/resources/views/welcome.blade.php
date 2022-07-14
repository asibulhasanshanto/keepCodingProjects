<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css','resources/css/query.css', 'resources/js/app.js'])
    </head>
    <body>
        <h1>hello </h1>
        <img class="test_image" src="{{url('img/profile/test.JPG')}}" alt="">
    </body>
</html>
