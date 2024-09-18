<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/componentsCSS/header.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/createEventos/createEventos.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <x-header />

    <div class="container">
        <div class="instrucoes">
            <div class="titulo-instrucoes">
                <h1>CRIAR EVENTO</h1>
                <img src="" alt=""> <!-- Bolinhas de progresso -->
            </div>
            <div class="txt-instrucoes">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus ea quos molestias
                optio blanditiis a repellat doloribus tempora delectus enim? Numquam ullam aperiam iure
                pariatur tempore alias iusto, cumque maiores!
            </div>
        </div>
        <div class="forms1etapa">
            <form action="">
                <label for="">Nome</label>
                <input type="text">

                <label for="">Data</label>
                <input type="text">

                <label for="">Hora</label>
                <input type="text"> 
            </form>
        </div>
    </div>
</body>

</html>