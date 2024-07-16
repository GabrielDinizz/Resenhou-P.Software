<div class="container">
    <h1>Criar Evento</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="nomeEvento">Nome do Evento:</label>
        <input type="text" id="nomeEvento" name="nomeEvento" required>

        <div class="form-row">
            <div class="form-group">
                <label for="dataHora">Data e Hora:</label>
                <input type="datetime-local" id="dataHora" name="dataHora" required>
            </div>
            <div class="form-group">
                <label for="localizacao">Localização:</label>
                <input type="text" id="localizacao" name="localizacao" required>
            </div>
        </div>

        <label for="descricao">Descrição do Evento:</label>
        <textarea id="descricao" name="descricao" rows="4" required></textarea>

        <label for="imagem1">Imagem 1 (opcional):</label>
        <input type="file" id="imagem1" name="imagem1" accept="image/*">

        <label for="imagem2">Imagem 2 (opcional):</label>
        <input type="file" id="imagem2" name="imagem2" accept="image/*">

        <label for="imagem3">Imagem 3 (opcional):</label>
        <input type="file" id="imagem3" name="imagem3" accept="image/*">

        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <select id="categoria" name="categoria" required>
                <option value="funk">Funk</option>
                <option value="rap">Rap</option>
                <option value="pagode">Pagode</option>
            </select>
        </div>

        <label for="preco">Preço do Ingresso:</label>
        <input type="number" id="preco" name="preco" min="0" step="0.01" required>

        <label for="numIngressos">Número de Ingressos Disponíveis:</label>
        <input type="number" id="numIngressos" name="numIngressos" min="1" required>

        <label for="duracao">Duração do Evento:</label>
        <input type="text" id="duracao" name="duracao" required>

        <label for="requisitos">Requisitos Especiais:</label>
        <textarea id="requisitos" name="requisitos" rows="2"></textarea>

        <label for="nomeOrganizador">Nome do Organizador:</label>
        <input type="text" id="nomeOrganizador" name="nomeOrganizador" required>

        <label for="emailOrganizador">E-mail do Organizador:</label>
        <input type="email" id="emailOrganizador" name="emailOrganizador" required>

        <label for="telefoneOrganizador">Telefone do Organizador:</label>
        <input type="tel" id="telefoneOrganizador" name="telefoneOrganizador" required>

        <label for="websiteOrganizador">Website do Organizador (opcional):</label>
        <input type="url" id="websiteOrganizador" name="websiteOrganizador">

        <label for="termos">Termos e Condições:</label>
        <span><input type="checkbox" id="termos" name="termos" required> Ao criar este evento, você concorda com nossos termos e condições para a venda de ingressos e a realização de eventos.</span>

        <button type="submit">Enviar Evento</button>
    </form>
</div>