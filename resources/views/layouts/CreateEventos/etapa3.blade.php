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
                    <a href="{{ route('evento.etapa2') }}"><img src="{{ asset('assets/voltar.png') }}" alt="" height="100%"></a>
                    <h1>CRIAR <span>EVENTO</span></h1>
                    <img src="{{ asset('assets/etapa3.png') }}" alt=""> <!-- Bolinhas de progresso -->
                </div>
                <div class="txt-instrucoes">
                    <h2>LOCALIZAÇÃO</h2>
                </div>
            </div>
            <div class="form-dados">
                <form action="{{ route("evento.saveEtapa3") }}" method="POST">
                    @csrf
                    <p>NOME DO LOCAL <span>*</span></p>
                    <input type="text" value="{{ $dados['local_nome'] ?? '' }}" name="local_nome"><br>

                    <p>CEP <span>*</span></p>
                    <input type="text" value="{{ $dados['local_cep'] ?? '' }}" name="local_cep"><br>

                    <div class="input-3">
                        <div>
                            <p>AV./RUA <span>*</span></p>
                            <input type="text" value="{{ $dados['local_rua'] ?? '' }}" name="local_rua"><br>
                        </div>
                        <div>
                            <p>NÚMERO</p>
                            <input type="text" value="{{ $dados['local_numero'] ?? '' }}" name="local_numero"><br>
                        </div>
                    </div>

                    <p>BAIRRO <span>*</span></p>
                    <input type="text" value="{{ $dados['local_bairro'] ?? '' }}" name="local_bairro"><br>

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
                    <div class="continuar">
                        <button type="submit">CONTINUAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>