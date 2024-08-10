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