<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- scss読み込み -->
    @vite(['resources/scss/app.scss'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="antialiased">
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">MoneyMinder</a>
                <button type="button" class="btn btn-primary">Primary</button>
            </div>
        </nav>
    </header>

    <!-- 成功した時 -->
    <div class="alert alert-success container" role="alert">
        A simple success alert—check it out!
    </div>

    <!-- 失敗した時 -->
    <div class="alert alert-danger container" role="alert">
        A simple danger alert—check it out!
    </div>

    <main class="py-5">
        @yield('content')
    </main>

    <footer style="background-color: #000000;" class="py-2 text-center">
        <p class="text-white" style="margin-bottom: 0;">2024 スーハー株式会社</p>
    </footer>
</body>

</html>