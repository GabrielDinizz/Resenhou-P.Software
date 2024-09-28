<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/componentsCSS/header.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/createEventos/createEventos.css') }} ">
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
                    <a href="{{ route('evento.etapa1') }}"><img src="{{ asset('assets/voltar.png') }}" alt="" height="100%"></a>
                    <h1>CRIAR <span>EVENTO</span></h1>
                    <img src="{{ asset('assets/etapa2.png') }}" alt=""> <!-- Bolinhas de progresso -->
                </div>
                <div class="txt-instrucoes">
                    Conte todos os detalhes do seu evento, como a programação
                    e os diferenciais da sua produção!
                </div>
            </div>
            <div class="form-dados">
                <form action="{{ route("evento.saveEtapa2") }}" method="POST">
                    @csrf
                    <p>Descrição do Evento <span>*</span> </p>
                    <!-- textarea não tem atributo "value" -->
                    <textarea name="evento_descricao" id="" name="">
                        {{ $dados['evento_descricao'] ?? '' }}
                    </textarea>

                    <div class="input-2">
                        <div>
                            <p>Categoria <span>*</span> </p>
                            <select id="categoria" name="evento_categoria">
                                <option value="pagode" {{ (isset($dados['evento_categoria']) && $dados['evento_categoria'] == 'pagode') ? 'selected' : '' }}>Pagode</option>
                                <option value="funk" {{ (isset($dados['evento_categoria']) && $dados['evento_categoria'] == 'funk') ? 'selected' : '' }}>Funk</option>
                                <option value="rock" {{ (isset($dados['evento_categoria']) && $dados['evento_categoria'] == 'rock') ? 'selected' : '' }}>Rock</option>
                                <option value="samba" {{ (isset($dados['evento_categoria']) && $dados['evento_categoria'] == 'samba') ? 'selected' : '' }}>Samba</option>
                            </select>

                        </div>
                        <div>
                            <p>Preço do Ingresso <span>*</span></p>
                            <input type="text" id="preco" name="evento_preco" placeholder="R$00,00" value="{{ $dados['evento_preco'] ?? '' }}"><br>
                        </div>
                    </div>
                    <div class="continuar">
                        <button type="submit">CONTINUAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Máscara para data no formato DD/MM/YYYY
            $('#preco').mask('R$00,00');
        });
    </script>
</body>

</html>