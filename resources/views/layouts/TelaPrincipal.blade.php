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

    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3 class="categoriastitulo">Encontre Eventos</h3>
                <a href="#" class="categorias-txt">Hoje</a>
                <a href="#" class="categorias-txt">Amanhã</a>
                <a href="#" class="categorias-txt">Esta semana</a>
                <a href="#" class="categorias-txt">Este Fim de semana</a>
                <a href="#" class="categorias-txt">Próxima semana</a>
            </div>

            <div class="footer-column">
                <h3 class="categoriastitulo">CATEGORIAS</h3>
                <a href="#" class="categorias-txt">Festa e Shows</a>
                <a href="#" class="categorias-txt">Festa Privada</a>
                <a href="#" class="categorias-txt">Grátis</a>
            </div>

            <div class="footer-column">
                <h3 id="textform">SAC</h3>
                <form action="{{ route('sac.store') }}" method="POST">
                    @csrf
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="nome" name="nome"><br>

                    <label for="mensagem">Mensagem:</label><br>
                    <textarea id="mensagem" name="mensagem"></textarea><br>

                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </footer>

</body>

</html>