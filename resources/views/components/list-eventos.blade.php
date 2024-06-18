<section>
    <div class="container-eventos">
        <div class="grid-eventos">
        
        @foreach ($attributes['cards'] as $card)
            <div class="card-listEventos">
                <div class="img-cardList">
                    <img src="{{$card->imgURL}}" alt="">
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
                            <h2>Arena Festival</h2>
                            <div class="localizacaoEvent">
                                <img src="{{ asset('assets/localizacao-icon.svg') }}">
                                <p>RJ - Rocinha</p>
                            </div>
                        </div>
                        <div class="preco-cardList">
                            <div>
                                $55,66
                            </div>
                            <div>
                                Comprar
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            
        </div>
    </div>
</section>