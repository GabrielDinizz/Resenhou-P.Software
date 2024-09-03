<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/telaPrincipal/cardSection.css') }}">
    <link rel="stylesheet" href="{{ asset('css/telaPrincipal/rodapeSection.css') }}">
    <link rel="stylesheet" href="{{ asset('css/telaPrincipal/homepageSection.css') }}">
    <link rel="stylesheet" href="{{ asset('css/componentsCSS/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    
</head>

<body>
        <!-- Como posso fazer uma regra de negocio na qual fique simples adicionar os 'modulos' da pagina -->
        <x-homepage />
        
    <main>
        <x-carousel />
        <!-- O que eu coloco no component diretamente é um atributo -->
        <x-card cont="3"/>
    </main>


<x-footer />


 

</body>

</html>