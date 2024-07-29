@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="container">
    <h1>Criar Evento</h1>
    <form action="{{ route('eventos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="nomeEvento">Nome do Evento:</label>
        <input type="text" id="nomeEvento" name="nomeEvento" required>

        <div class="form-row">
            <div class="form-group">
                <label for="dataHora">Data e Hora:</label>
                <input type="datetime-local" id="dataHora" name="dataHora" required>
            </div>
            <div class="form-group">
                <label for="localizacao">Localização:</label>
                <input type="text" id="localizacao" name="localizacao">
            </div>
        </div>

        <label for="descricao">Descrição do Evento:</label>
        <textarea id="descricao" name="descricao" rows="4"></textarea>

        <label for="imagem1">Imagem (Link):</label>
        <input type="text" id="imagem1" name="imagem">

        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <select id="categoria" name="categoria" required>
                <option value="funk">Funk</option>
                <option value="rap">Rap</option>
                <option value="pagode">Pagode</option>
            </select>
        </div>

        <label for="preco">Preço do Ingresso:</label>
        <input type="text" id="preco" name="preco" value="R$00,00" required>

        <label for="numIngressos">Número de Ingressos Disponíveis:</label>
        <input type="number" id="numIngressos" name="numIngressos" min="1">

        <label for="duracao">Duração do Evento:</label>
        <input type="text" id="duracao" name="duracao">

        <label for="requisitos">Requisitos Especiais:</label>
        <textarea id="requisitos" name="requisitos" rows="2"></textarea>

        <label for="nomeOrganizador">Nome do Organizador:</label>
        <input type="text" id="nomeOrganizador" name="nomeOrganizador">

        <label for="emailOrganizador">E-mail do Organizador:</label>
        <input type="email" id="emailOrganizador" name="emailOrganizador">

        <label for="telefoneOrganizador">Telefone do Organizador:</label>
        <input type="tel" id="telefoneOrganizador" name="telefoneOrganizador">

        <label for="websiteOrganizador">Website do Organizador (opcional):</label>
        <input type="url" id="websiteOrganizador" name="websiteOrganizador">

        <label for="termos">Termos e Condições:</label>
        <span><input type="checkbox" id="termos" name="termos"> Ao criar este evento, você concorda com nossos termos e condições para a venda de ingressos e a realização de eventos.</span>

        <button type="submit">Enviar Evento</button>
    </form>


    <!-- Como posso colcocar o arquivo separado? -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const precoInput = document.getElementById('preco');

            precoInput.addEventListener('input', function() {
                let value = precoInput.value;

                // Remove todos os caracteres que não sejam dígitos
                value = value.replace(/\D/g, '');

                // Adiciona a parte decimal
                if (value) {
                    // Garante que o valor tenha pelo menos duas casas decimais
                    value = value.padStart(3, '0');
                    let integerPart = value.slice(0, -2); // Parte inteira
                    let decimalPart = value.slice(-2); // Parte decimal

                    // Remove zeros à esquerda na parte inteira
                    integerPart = integerPart.replace(/^0+/, '') || '0';

                    // Formata o valor
                    value = `${integerPart},${decimalPart}`;
                } else {
                    value = '00,00';
                }

                precoInput.value = `R$${value}`;
            });
        });
    </script>
</div>