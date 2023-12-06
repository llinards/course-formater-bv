<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>
<body class="antialiased">
<div class="container">
    <div class="row">
        <div class="col-10">
            <h4>Pievieno Excel failu</h4>
            <form action="/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <input id="excel-upload" type="file"/>
                <button type="submit" class="btn btn-success">Konvertēt</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
