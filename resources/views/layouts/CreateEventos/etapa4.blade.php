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
                    <a href="{{ route('evento.etapa3') }}"><img src="{{ asset('assets/voltar.png') }}" alt="" height="100%"></a>
                    <h1>CRIAR <span>EVENTO</span></h1>
                    <img src="{{ asset('assets/etapa4.png') }}" alt=""> <!-- Bolinhas de progresso -->
                </div>
                <div class="txt-instrucoes">
                    Para deixar seu evento único, forneça algumas fotos... pode ser um banner ou até mesmo fotos do local.
                </div>
            </div>
            <div class="form-dados">
                <form action="{{ route('evento.saveEtapa4') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="subtitle">Imagem</p>
                    <div class="upload-container" id="uploadContainer">
                        <input type="file" id="imageUpload" name="image[]" accept="image/*" multiple>
                        <div class="upload-area" id="uploadArea">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M288 109.3L288 352c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-242.7-73.4 73.4c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l128-128c12.5-12.5 32.8-12.5 45.3 0l128 128c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L288 109.3zM64 352l128 0c0 35.3 28.7 64 64 64s64-28.7 64-64l128 0c35.3 0 64 28.7 64 64l0 32c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64l0-32c0-35.3 28.7-64 64-64zM432 456a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
                                </svg>
                            </div>
                            <p>Arraste e solte uma imagem aqui ou clique para selecionar.</p>
                        </div>
                        <div id="previewContainer" class="preview-container"></div>
                    </div>
                    <p class="subtitle subtitleLink">Link para o grupo do whatsapp:</p>
                    <input type="text" placeholder="https://chat.whatsapp.com/grupo" value="{{ $dados['grupo_link'] ?? '' }}" name="grupo_link"><br>

                    <div class="continuar">
                        <button type="submit">CONTINUAR</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        const uploadArea = document.getElementById('uploadArea');
        const imageUpload = document.getElementById('imageUpload');
        const previewContainer = document.getElementById('previewContainer');

        // Evento de clique para abrir o seletor de arquivos
        uploadArea.addEventListener('click', () => {
            imageUpload.click();
        });

        // Evento de arrastar e soltar
        uploadArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadArea.classList.add('dragover');
        });

        uploadArea.addEventListener('dragleave', () => {
            uploadArea.classList.remove('dragover');
        });

        uploadArea.addEventListener('drop', (e) => {
            e.preventDefault();
            uploadArea.classList.remove('dragover');
            handleFiles(e.dataTransfer.files);
        });

        // Evento de seleção de arquivos
        imageUpload.addEventListener('change', () => {
            handleFiles(imageUpload.files);
        });

        function handleFiles(files) {
            previewContainer.innerHTML = ''; // Limpar a área de visualização antes de mostrar as novas imagens

            // Itera sobre todos os arquivos selecionados
            Array.from(files).forEach(file => {
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();

                    reader.onload = function(event) {
                        const img = document.createElement('img');
                        img.src = event.target.result;
                        previewContainer.appendChild(img);
                    }

                    reader.readAsDataURL(file);
                }
            });
        }
    </script>
</body>

</html>