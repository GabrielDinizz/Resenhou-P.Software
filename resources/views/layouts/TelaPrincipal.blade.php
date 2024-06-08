<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/telaPrincipal/cardSection.css') }}">

    <!-- Style Footer -->
    <style>
        body {
            min-height: 100vh;
            padding-bottom: 200px;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            border-radius: 191px 191px 0 0;
            background-image: linear-gradient(to bottom, #9a2ecb, #a742d8, #b454e4, #c165f1, #ce76fe);
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-column {
            display: flex;
            flex-direction: column;
            flex: 1;
            padding: 0 15px;
        }


        .contact-form {
            display: flex;
            flex-direction: column;
        }

        .styled-input,
        .styled-textarea {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #fff;
            border-radius: 191px;
            font-size: 16px;
            background: transparent;
            color: #fff;
        }

        .styled-input::placeholder,
        .styled-textarea::placeholder {
            color: #ddd;
        }

        .styled-textarea {
            height: 100px;
            border-radius: 25px;
            border: 1px solid #fff;
        }

        .styled-input:focus,
        .styled-textarea:focus {
            outline: none;
            border-color: #fff;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
        }

        .categorias-txt {
            font-family: "Days One", sans-serif;
            text-decoration: none;
            color: white;
            display: block;
            padding: 5px 0;
        }

        .categoriastitulo {
            font-size: 30px;
            font-family: "Days One", sans-serif;

        }

        #textform {
            font-size: 30px;
            font-family: "Days One", sans-serif;
        }

        #txtinputformsac {
            font-size: 16px;
            font-family: "Days One", sans-serif;
        }

        #txtareaformsac {
            font-size: 16px;
            font-family: "Days One", sans-serif;
        }

        #txtbuttonformsac {
            font-size: 16px;
            font-family: "Days One", sans-serif;
        }
    </style>
</head>

<body>

    <main>
        @yield('card')
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