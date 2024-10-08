<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        @component('navbar')
        @endcomponent
    </div>
    <div class="container-fluid">
        <main role="main">
            @hasSection('content')
                @yield('content')
            @endif
        </main>
    </div>
    <div class="container-fluid footer">
        <div class="card-footer">
            <p class="text-center py-4">Todos os direitos reservados a &copy;Copyright</p>
        </div>
    </div>
</body>
</html>