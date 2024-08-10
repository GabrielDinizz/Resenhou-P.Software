<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/componentsCSS/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/listEventos/selecionarLocalizacao.css') }}">
    <link rel="stylesheet" href="{{ asset('css/listEventos/listEventos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/componentsCSS/paginacao.css') }}">
    <link rel="stylesheet" href="{{ asset('css/telaPrincipal/rodapeSection.css') }}">
</head>
<body>
    <x-header/>
    <x-selecionar-localizacao/>
    <div id="eventsdisp">
    <div id="titleevents">
        <h2 id="textevents">EVENTOS DISPONÍVEIS</h2>
        <div class="dropdown">
            <button class="dropdown-button">Eventos</button>
            <div class="dropdown-content" id="dropdown">
                <a href="{{ route('list-eventos') }}">Todos</a>
                <a href="{{ route('list-eventos', ['categoria' => 'sertanejo']) }}">Sertanejo</a>
                <a href="{{ route('list-eventos', ['categoria' => 'eletronica']) }}">Eletronica</a>
                <a href="{{ route('list-eventos', ['categoria' => 'baile']) }}">Baile</a>
                <a href="{{ route('list-eventos', ['categoria' => 'pagode']) }}">Pagode</a>
                <a href="{{ route('list-eventos', ['categoria' => 'funk']) }}">Funk</a>
            </div>
        </div>
    </div>
    <x-card-detalhes :eventos="$eventos" />
</div>

        <x-footer />
    </div>
    
</body>
</html>