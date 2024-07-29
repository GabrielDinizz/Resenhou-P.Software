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
                        <p>{{ date('D', strtotime($evento->data)) }}</p> <!-- Dia da semana -->
                        <h3>{{ date('d', strtotime($evento->data)) }}</h3> <!-- Dia do mês -->
                        <p>{{ date('M', strtotime($evento->data)) }}</p> <!-- Mês -->
                        <h4>{{ date('H:i', strtotime($evento->data)) }}</h4> <!-- Hora -->
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
                                ${{ number_format($evento->valor, 2, ',', '.') }}
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
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <!-- Botão Anterior -->
                <li class="page-item {{ $eventos->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $eventos->previousPageUrl() }}" aria-label="Anterior">
                        <span aria-hidden="true">Anterior</span>
                    </a>
                </li>

                <!-- Numeração das Páginas -->
                @for ($i = 1; $i <= $eventos->lastPage(); $i++)
                    @if ($i == $eventos->currentPage())
                    <li class="page-item active">
                        <a class="page-link" href="#">{{ $i }}</a>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $eventos->url($i) }}">{{ $i }}</a>
                    </li>
                    @endif
                    @endfor

                    <!-- Botão Próximo -->
                    <li class="page-item {{ $eventos->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $eventos->nextPageUrl() }}" aria-label="Próximo">
                            <span aria-hidden="true">Próximo</span>
                        </a>
                    </li>
            </ul>
        </nav>
    </div>

</section>