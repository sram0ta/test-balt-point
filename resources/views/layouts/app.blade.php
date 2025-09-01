<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Рецепты')</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        header { margin-bottom: 20px; }
        nav a { margin-right: 10px; }
        .actions { float: right; }
        main { margin-top: 20px; }
    </style>
</head>
<body>
<header>
    <h1>@yield('title', 'Рецепты')</h1>

    <div class="actions">
        @yield('actions')
    </div>

    <nav>
        <a href="{{ route('recipes.index') }}">Рецепты</a>
    </nav>
</header>

<main>
    @yield('content')
</main>
</body>
</html>
