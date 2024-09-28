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
                    <img src="{{ asset('assets/etapa4.png') }}" alt=""> <!-- Bolinhas de progresso -->
                </div>
                <div class="txt-instrucoes">
                    Para deixar seu evento único, forneça algumas fotos... pode ser um banner ou até mesmo fotos do local.
                </div>
            </div>
            <div class="form-dados">
                <form action="">
                    <p>Imagem</p>
                    <div class="upload-container" id="uploadContainer">
                        <input type="file" id="imageUpload" name="image" accept="image/*" hidden>
                        <div class="upload-area">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="70px"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path fill="#ffffff" d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 242.7-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7 288 32zM64 352c-35.3 0-64 28.7-64 64l0 32c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-32c0-35.3-28.7-64-64-64l-101.5 0-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352 64 352zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
                                </svg>
                            </div>
                            <p>Arraste e solte uma imagem aqui ou clique para selecionar.</p>
                        </div>
                    </div>

                    <p>Link para o grupo do whatsapp:</p>
                    <input type="text" placeholder="https://chat.whatsapp.com/grupo"><br>
                </form>
            </div>
            <div class="continuar">
                <form action="{{ route('evento.etapa5') }}" method="GET">
                    <button type="submit">CONTINUAR</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const uploadContainer = document.getElementById('uploadContainer');
        const imageUpload = document.getElementById('imageUpload');

        uploadContainer.addEventListener('click', () => {
            imageUpload.click(); // Simula o clique no input de arquivo
        });

        uploadContainer.addEventListener('dragover', (e) => {
            e.preventDefault(); // Previne o comportamento padrão para permitir o drop
            uploadContainer.classList.add('drag-over'); // Adiciona uma classe para mudar a aparência (opcional)
        });

        uploadContainer.addEventListener('dragleave', () => {
            uploadContainer.classList.remove('drag-over'); // Remove a classe ao sair
        });

        uploadContainer.addEventListener('drop', (e) => {
            e.preventDefault(); // Previne o comportamento padrão
            uploadContainer.classList.remove('drag-over'); // Remove a classe ao soltar
            const files = e.dataTransfer.files; // Obtém os arquivos arrastados
            if (files.length > 0) {
                imageUpload.files = files; // Define os arquivos no input de arquivo
                // Você pode adicionar lógica aqui para exibir a imagem ou fazer outra ação
            }
        });
    </script>
</body>

</html>