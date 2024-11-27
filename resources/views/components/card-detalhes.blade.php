<section>
    <div class="container-eventos">
        <div class="grid-eventos">
            @if($eventos->count() > 0)
                @foreach ($eventos as $evento)
                    <div class="card-listEventos">
                        <div class="img-cardList">
                            @if(!empty($evento->imagem))
                                @php
                                    // Exibir a primeira imagem (se for JSON ou caminho direto)
                                    $imagePath = is_array(json_decode($evento->imagem, true)) 
                                        ? json_decode($evento->imagem, true)[0] 
                                        : $evento->imagem;
                                @endphp
                                <img src="{{ asset('storage/' . $imagePath) }}" alt="Imagem do Evento">
                            @endif
                        </div>
                        <div class="container-descricao">
                            <div class="descricao-cardList">
                                <div class="data-cardList">
                                    <p>{{ ucfirst($evento->formatted_data) }}</p> <!-- Data formatada -->
                                    <h3>{{ $evento->formatted_hora }}</h3> <!-- Hora formatada -->
                                </div>
                                <div class="text-cardList">
                                    <div class="title-cardList">
                                        <h2>{{ $evento->evento_nome }}</h2>
                                        <div class="localizacaoEvent">
                                            <img src="{{ asset('assets/localizacao-icon.svg') }}">
                                            <p>{{ $evento->local_nome }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="preco-cardList">
                                <div>
                                    <button type="button" class="button-detalhes" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $evento->id }}">
                                        Detalhes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop{{ $evento->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel{{ $evento->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-img">
                                    <img src="{{ asset('storage/' . $imagePath) }}" alt="Imagem do Evento">
                                </div>
                                <div class="modal-nomeEvento">
                                    <h3>{{ $evento->evento_nome }}</h3>
                                </div>
                                <div class="modal-body">
                                    <h3>DETALHES DO <span>EVENTO</span></h3>
                                    <p><strong>Data:</strong> {{ $evento->formatted_data }} às {{ $evento->formatted_hora }}</p>
                                    <p>
                                        <strong>Localização:</strong> 
                                        {{ $evento->local_nome }}, {{ $evento->local_rua }}, {{ $evento->local_numero }}, {{ $evento->local_bairro }}, {{ $evento->local_cidade }} - {{ $evento->local_estado }}
                                    </p>
                                    <p><strong>Categoria:</strong> {{ $evento->evento_categoria }}</p>
                                    <p><strong>Preço:</strong> {{ $evento->evento_preco ? 'R$' . number_format($evento->evento_preco, 2, ',', '.') : 'Gratuito' }}</p>
                                </div>
                                <div class="modal-descricao">
                                    <h3>DESCRIÇÃO DO <span>EVENTO</span></h3>
                                    <p>{{ $evento->evento_descricao ?? 'Nenhuma descrição disponível.' }}</p>
                                </div>
                                <div class="modal-criadoPor">
                                    <h3>LINK <span>WHATSAPP</span></h3>
                                    <p><a href="{{ $evento->grupo_link }}" target="_blank">{{ $evento->grupo_link ?? 'Nenhum link de grupo fornecido.' }}</a></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
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
