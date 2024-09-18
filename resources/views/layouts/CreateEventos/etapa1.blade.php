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
        <div class="content">
            <div class="instrucoes">
                <div class="titulo-instrucoes">
                    <h1>CRIAR <span>EVENTO</span></h1>
                    <img src="{{ asset('assets/etapa1.png') }}" alt=""> <!-- Bolinhas de progresso -->
                </div>
                <div class="txt-instrucoes">
                    Vamos dar um nome ao seu evento! Nos diga também a data e
                    a hora que a cidade irá parar para comparecer a essa Resenha!
                </div>
            </div>
            <div class="forms1etapa">
                <form action="">
                    <p>Nome</p>
                    <input type="text"> <br>

                    <p>Data</p>
                    <input type="text"><br>

                    <p>Hora</p>
                    <input type="text"><br>
                </form>
            </div>
            <div class="continuar">
                <form action="{{ route('etapa2') }}" method="GET">
                    <button type="submit">CONTINUAR</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>