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
                <form action="{{ route('evento.saveEtapa3') }}" method="POST">
                    @csrf
                    <p>NOME DO LOCAL <span>*</span></p>
                    <input type="text" name="local_nome" value="{{ old('local_nome', $dados['local_nome'] ?? '') }}" required>
                    @error('local_nome')
                    <span class="error">{{ $message }}</span>
                    @enderror
                    <br>

                    <p>CEP <span>*</span></p>
                    <input type="text" id="cep" name="local_cep" value="{{ old('local_cep', $dados['local_cep'] ?? '') }}" maxlength="8" required>
                    @error('local_cep')
                    <span class="error">{{ $message }}</span>
                    @enderror
                    <br>

                    <div class="input-3">
                        <div>
                            <p>AV./RUA <span>*</span></p>
                            <input type="text" id="rua" name="local_rua" value="{{ old('local_rua', $dados['local_rua'] ?? '') }}" required>
                            @error('local_rua')
                            <span class="error">{{ $message }}</span>
                            @enderror
                            <br>
                        </div>
                        <div>
                            <p>NÚMERO</p>
                            <input type="text" id="numero" name="local_numero" value="{{ old('local_numero', $dados['local_numero'] ?? '') }}" maxlength="10" required>
                            @error('local_numero')
                            <span class="error">{{ $message }}</span>
                            @enderror
                            <br>
                        </div>
                    </div>

                    <p>BAIRRO <span>*</span></p>
                    <input type="text" id="bairro" name="local_bairro" value="{{ old('local_bairro', $dados['local_bairro'] ?? '') }}" required>
                    @error('local_bairro')
                    <span class="error">{{ $message }}</span>
                    @enderror
                    <br>

                    <div class="input-2">
                        <div>
                            <p>CIDADE <span>*</span></p>
                            <input type="text" id="cidade" name="local_cidade" value="{{ old('local_cidade', $dados['local_cidade'] ?? '') }}" required>
                            @error('local_cidade')
                            <span class="error">{{ $message }}</span>
                            @enderror
                            <br>
                        </div>
                        <div>
                            <p>ESTADO <span>*</span></p>
                            <input type="text" id="estado" name="local_estado" value="{{ old('local_estado', $dados['local_estado'] ?? '') }}" maxlength="2" required>
                            @error('local_estado')
                            <span class="error">{{ $message }}</span>
                            @enderror
                            <br>
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

<script>
    // Função para buscar endereço por CEP
    function buscarEnderecoPorCEP() {
        const cep = document.getElementById('cep').value.replace(/\D/g, '');

        if (cep.length === 8) { // Apenas executa a busca quando o CEP tiver 8 dígitos
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erro ao buscar o CEP');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.erro) {
                        alert('CEP não encontrado!');
                        return;
                    }

                    // Preenchendo os campos com os dados da API
                    document.getElementById('rua').value = data.logradouro || '';
                    document.getElementById('bairro').value = data.bairro || '';
                    document.getElementById('cidade').value = data.localidade || '';
                    document.getElementById('estado').value = data.uf || '';
                })
                .catch(error => {
                    console.error('Erro:', error);
                    alert('Não foi possível buscar o endereço.');
                });
        }
    }

    // Adiciona o evento de input ao campo CEP
    document.getElementById('cep').addEventListener('input', buscarEnderecoPorCEP);
</script>


</html>