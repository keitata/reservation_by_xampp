<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <!-- ヘッダーのコンテンツ -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- フッターのコンテンツ -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
