<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ env('APP_NAME','Tech NC') }}</title>
</head>

<body>
    
    @yield('header')

    <div class="container">
        @yield('conteudo')
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

</html>