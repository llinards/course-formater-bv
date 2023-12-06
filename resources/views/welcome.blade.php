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
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-10">
            <h4>Excel</h4>
            @if($errors->any())
                <x-alert-messages :errors="$errors"/>
            @endif
            <form action="/upload-excel" method="POST" enctype="multipart/form-data">
                @csrf
                <input id="excel-upload" name="excel" type="file"/>
                <button type="submit" class="btn btn-primary">Konvertēt</button>
            </form>
        </div>
    </div>
    <div class="row mt-5 justify-content-center">
        <div class="col-10">
            <h4>HTML</h4>
            <div>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>
