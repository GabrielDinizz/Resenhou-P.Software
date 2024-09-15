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
        <a href="{{ route('evento.etapa1') }}" class="link">
            <div><img src="{{ asset('assets/criarEvento.svg') }}" alt="">
                <p>Criar Evento</p>
            </div>
        </a>
        <a href="{{ route('list-eventos') }}" class="link">
            <div><img src="{{ asset('assets/eventos.svg') }}" alt="">
                <p>Eventos</p>
            </div>
        </a>
        @if (Auth::check())
        <div>
            <p><a href="{{ route('perfil') }}"><img id="imglogin" src="{{ asset(auth()->user()->avatar) }}"></a></p>


        </div>
        @else
        <div>
            <a href="{{ route('login') }}"><button>LOGIN</button></a>
        </div>
        <div>
            <a href="{{ route('createAccount')}}">
                <p>Criar Conta</p>
            </a>
        </div>
        @endif
    </nav>
</header>