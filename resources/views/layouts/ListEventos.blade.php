<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/componentsCSS/header.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/listEventos/selecionarLocalizacao.css') }}">
  <link rel="stylesheet" href="{{ asset('css/listEventos/listEventos.css') }}">
  <link rel="stylesheet" href="{{ asset('css/componentsCSS/paginacao.css') }}">
  <link rel="stylesheet" href="{{ asset('css/telaPrincipal/rodapeSection.css') }}">

</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <x-header />
  <x-selecionar-localizacao />
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



</body>

</html>