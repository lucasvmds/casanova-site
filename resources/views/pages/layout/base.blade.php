<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> @yield('title') - Casa Nova Empreendimentos</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;700&display=swap" />
        <script src="https://kit.fontawesome.com/c3e219dc62.js" crossorigin="anonymous" defer></script>
        @vite('resources/js/app.js')
        @stack('scripts')
    </head>
    <body id="body">
        @include('pages.layout.header')
        @yield('content')
        @include('pages.layout.footer')
    </body>
</html>