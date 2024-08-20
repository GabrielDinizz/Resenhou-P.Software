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
        @if (Auth::check())
            <div>
                <img id="imglogin" src="{{ asset('assets/img_login.png') }}" alt="">
                ㅤ
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <button>LOGOUT</button>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @else
            <div>
                <a href="{{ route('login') }}"><button>LOGIN</button></a>
            </div>
            <div>
                <p>Criar Conta</p>
            </div>
        @endif
    </nav>
</header>
