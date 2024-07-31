<section>
    <div>
        <h1 class="titleCard"><span>PROXIMAS</span> RESENHAS</h1>
    </div>
    <div class="flex-card">
        @foreach ($eventos as $evento)
            <div class="card">
                <div class="div-img-card">
                    <img src="{{$evento->imgURL}}" alt="">
                </div>
                <div class="descricao-card">
                    <p>Daqui ...</p>
                    <h2>{{$evento->nome}}</h2>
                </div>
            </div>
        @endforeach
        <!-- Se $eventos for do tipo LengthAwarePaginator gera a paginação, contudo se for do tipo Collection não gera, pois o objeto Collection não possui o método links  -->
        @if (get_class($eventos) == 'Illuminate\Pagination\LengthAwarePaginator')
            {{$eventos->links()}}
        @endif
        <!-- dd(variavel) -> Exibe o conteúdo do objeto na view -> semelhante ao var_dump() -->
    </div>
    <div class="div-refresh">
        <img src="{{ asset('assets/refresh.png') }}">
    </div>
    <div class="procurar-mais-resenhas">
    <div class="text-center">
        <button class="btn btn-custom">PROCURAR MAIS RESENHAS</button>
        <div class="carrossel">
            <div class="genre-circles">
                <div class="genre-circle">FUNK</div>
                <div class="genre-circle">RAP</div>
                <div class="genre-circle">SERTANEJO</div>
                <div class="genre-circle">TRAP</div>
                <div class="genre-circle">SAMBA</div>
                <div class="genre-circle">KPOP</div>
                <div class="genre-circle">MPB</div>
            </div>
           
        </div>
    </div>
</div>
</section>
