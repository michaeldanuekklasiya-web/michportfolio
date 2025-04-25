<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- TailwindCSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="../img/logo2.png" rel="shortcut icon">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/Style.css') }}">
    <title>michaeldanuekklasiya</title>
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">
    <div>
        @include('includes.header')
    </div>

    <div>
        @include('layouts.home.hero')
    </div>

    <div>
        @include('layouts.home.expe')
    </div>

    <div>
        @include('layouts.home.porto')
    </div>


    <div>
        @include('includes.footer')
    </div>
</body>
</html>

