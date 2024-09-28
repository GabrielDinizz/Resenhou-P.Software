<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Evento</title>
    <link rel="stylesheet" href="{{ asset('css/componentsCSS/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/createEventos/createEventos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- jQuery Mask Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
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
            <div class="form-dados">
                <form action="{{ route('evento.saveEtapa1') }}" method="POST">
                    @csrf <!-- Adiciona o token CSRF -->
                    <p>Nome <span>*</span></p>
                    <input type="text" name="evento_nome" value="{{ $dados['evento_nome'] ?? '' }}"><br>

                    <div class="input-2">
                        <div>
                            <p>Data <span>*</span></p>
                            <input type="text" id="data" name="evento_data" value="{{ $dados['evento_data'] ?? '' }}" placeholder="DD/MM/YYYY"><br>
                        </div>

                        <div>
                            <p>Hora <span>*</span></p>
                            <input type="text" id="hora" name="evento_hora" value="{{ $dados['evento_hora'] ?? '' }}" placeholder="00:00"><br>
                        </div>
                    </div>
                    <div class="continuar">
                        <button type="submit">CONTINUAR</button> <!-- Botão para enviar o formulário -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Máscara para data no formato DD/MM/YYYY
            $('#data').mask('00/00/0000');
            // Máscara para hora no formato HH:MM (24 horas)
            $('#hora').mask('00:00');
        });
    </script>
</body>

</html>