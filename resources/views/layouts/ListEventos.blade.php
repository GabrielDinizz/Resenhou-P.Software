<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/ComponentsCSS/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/listEventos/selecionarLocalizacao.css') }}">
    <link rel="stylesheet" href="{{ asset('css/listEventos/listEventos.css') }}">
</head>
<body>
    <x-header/>
    <x-selecionar-localizacao/>
    <x-card cont="2" isPaginate="true" />
</body>
</html>