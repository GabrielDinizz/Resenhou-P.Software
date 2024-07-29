<header>
    <div>
        <img src="{{ asset('assets/logoResenhou.png') }}" alt="">
        <input type="text">
    </div>
    <nav>
        <a href="{{ route('pagina-inicial') }}">
            <div><img src="{{ asset('assets/home.svg') }}" alt="">
                <p>Pagina Inicial</p>
            </div>
        </a>
        <a href="{{ route('eventos.create') }}" class="link">
            <div><img src="{{ asset('assets/criarEvento.svg') }}" alt="">
                <p>Criar Evento</p>
            </div>
        </a>
        <a href="{{ route('list-eventos') }}" class="link">
            <div><img src="{{ asset('assets/eventos.svg') }}" alt="">
                <p>Eventos</p>
            </div>
        </a>
        <div>
            <a href="{{ route('login') }}"><button>LOGIN</button></a>
        </div>
        <div>
            <p>Criar Conta</p>
        </div>
    </nav>
</header>