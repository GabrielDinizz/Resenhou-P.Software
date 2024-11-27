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
                    <a href="{{ route('evento.etapa4') }}"><img src="{{ asset('assets/voltar.png') }}" alt="" height="100%"></a>
                    <h1>CRIAR <span>EVENTO</span></h1>
                    <img src="{{ asset('assets/etapa5.png') }}" alt=""> <!-- Bolinhas de progresso -->
                </div>
                <div class="txt-instrucoes">
                    <h2>RESPONSABILIDADE</h2>
                    <p>Ao publicar este evento, estou de acordo com os Termos de uso, com as Diretrizes
                        de Comunidade e com o Acordo de Processamento de Dados, bem como declaro estar
                        ciente da Política de Privacidade, da Política de Cookies e das Obrigatoriedades
                        Legais.</p>
                </div>
            </div>

            <div class="continuar">
                <form action="{{ route('evento.saveEtapa5') }}" method="POST">
                    @csrf
                    <button type="submit">CRIAR EVENTO</button>
                </form>
            </div>

        </div>
    </div>
</body>

</html>