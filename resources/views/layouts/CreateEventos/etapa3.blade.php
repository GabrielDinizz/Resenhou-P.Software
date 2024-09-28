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
                    <img src="{{ asset('assets/etapa3.png') }}" alt=""> <!-- Bolinhas de progresso -->
                </div>
                <div class="txt-instrucoes">
                    <h2>LOCALIZAÇÃO</h2>
                </div>
            </div>
            <div class="form-dados">
                <form action="">
                    <p>NOME DO LOCAL <span>*</span></p>
                    <input type="text"><br>

                    <p>CEP <span>*</span></p>
                    <input type="text"><br>

                    <div class="input-3">
                        <div>
                            <p>AV./RUA <span>*</span></p>
                            <input type="text"><br>
                        </div>
                        <div>
                            <p>NÚMERO</p>
                            <input type="text"><br>
                        </div>
                    </div>

                    <p>BAIRRO <span>*</span></p>
                    <input type="text"><br>

                    <div class="input-2">
                        <div>
                            <p>CIDADE <span>*</span></p>
                            <input type="text" disabled><br>
                        </div>

                        <div>
                            <p>ESTADO <span>*</span></p>
                            <input type="text" disabled><br>
                        </div>
                    </div>
                </form>
            </div>
            <div class="continuar">
                <form action="{{ route('evento.etapa4') }}" method="GET">
                    <button type="submit">CONTINUAR</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>