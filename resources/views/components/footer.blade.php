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
                <h3 class="categoriastitulo">Categorias</h3>
                <a href="#" class="categorias-txt">Pagode</a>
                <a href="#" class="categorias-txt">Funk</a>
                <a href="#" class="categorias-txt">Rock</a>
            </div>

            <div class="footer-column">
                <h3 id="textform">SAC</h3>
                <form action="{{ route('sac.store') }}" method="POST">
                    @csrf
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="nome" name="nome"><br>

                    <label for="mensagem">Mensagem:</label><br>
                    <textarea id="mensagem" name="mensagem"></textarea><br>

                    <button type="submit" id="btn-enviar-sac">Enviar</button>
                </form>
            </div>
        </div>
    </footer>