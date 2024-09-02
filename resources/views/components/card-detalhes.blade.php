{{-- resources/views/components/card-detalhes.blade.php --}}
<section>
    <div class="container-eventos">
        <div class="grid-eventos">
            @if($eventos->count() > 0)
            @foreach ($eventos as $evento)
            <div class="card-listEventos">
                <div class="img-cardList">
                    <img src="{{$evento->imgURL}}" alt="">
                </div>
                <div class="container-descricao">
                    <div class="descricao-cardList">
                        <div class="data-cardList">
                            <p>{{ date('D', strtotime($evento->data)) }}</p>
                            <h3>{{ date('d', strtotime($evento->data)) }}</h3>
                            <p>{{ date('M', strtotime($evento->data)) }}</p>
                            <h4>{{ date('H:i', strtotime($evento->data)) }}</h4>
                        </div>
                        <div class="text-cardList">
                            <div class="title-cardList">
                                <h2>{{ $evento->nome }}</h2>
                                <div class="localizacaoEvent">
                                    <img src="{{ asset('assets/localizacao-icon.svg') }}">
                                    <p>{{ $evento->local }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="preco-cardList">
                        <div>
                            <button type="button" class="button-detalhes" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $evento->id }}">
                                Detalhes
                            </button>
                            <!--${{ number_format($evento->valor, 2, ',', '.') }}-->
                        </div>
                    </div>
                </div>

            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop{{ $evento->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{ $evento->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-img">
                            <img src={{ $evento->imgURL }} alt="">
                        </div>
                        <div class="modal-nomeEvento">
                            <h3>{{$evento->nome}}</h3>
                        </div>
                        <div class="modal-body">
                            <h3>DETALHES DO <span>EVENTO</span></h3>
                            <p><strong>Data:</strong> {{ date('D, d M Y H:i', strtotime($evento->data)) }}</p>
                            <p><strong>Localização:</strong> {{ $evento->local }}</p>
                            <p><strong>Categoria:</strong> {{ $evento->categoria }}</p>
                            <p><strong>Preço:</strong> ${{ number_format($evento->valor, 2, ',', '.') }}</p>
                        </div>
                        <div class="modal-descricao">
                            <h3>DESCRIÇÃO DO EVENTO</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima expedita earum illum, magnam placeat debitis recusandae. Nemo, sunt. Ullam praesentium temporibus similique soluta aut aspernatur cupiditate pariatur dignissimos reprehenderit hic.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
        @if ($eventos instanceof \Illuminate\Pagination\LengthAwarePaginator)
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
        @endif
    </div>
</section>