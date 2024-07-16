{{-- resources/views/components/card.blade.php --}}
<section>
    <div class="container-eventos">
        <div class="grid-eventos">
            @if($eventos->count() > 0)
            @foreach ($eventos as $evento)
            <div class="card-listEventos">
                <div class="img-cardList">
                    <img src="{{$evento->imgURL}}" alt="">
                </div>
                <div class="descricao-cardList">
                    <div class="data-cardList">
                        <p>SEX</p>
                        <h3>13</h3>
                        <p>SET</p>
                        <h4>21:00</h4>
                    </div>
                    <div class="text-cardList">
                        <div class="title-cardList">
                            <h2>{{ $evento->nome }}</h2>
                            <div class="localizacaoEvent">
                                <img src="{{ asset('assets/localizacao-icon.svg') }}">
                                <p>{{ $evento->local }}</p>
                            </div>
                        </div>
                        <div class="preco-cardList">
                            <div>
                                R${{ $evento->valor }}
                            </div>
                            <div>
                                Comprar
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>Sem eventos disponíveis.</p>
            @endif
        </div>
    </div>
    <!-- Renderiza os links de paginação -->
    <div class="pagination-links">
        {{ $eventos->links() }}
    </div>
</section>