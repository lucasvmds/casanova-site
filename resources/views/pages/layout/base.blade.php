<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> @yield('title') - Casa Nova Empreendimentos</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;700&display=swap" />
        <script src="https://kit.fontawesome.com/c3e219dc62.js" crossorigin="anonymous" defer></script>
        @vite('resources/js/app.js')
        @stack('scripts')
    </head>
    <body>
        @include('pages.layout.header')
        <main>
            @yield('content')
        </main>
        @include('pages.layout.footer')
    </body>
</html>