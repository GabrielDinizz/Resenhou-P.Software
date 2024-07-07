<section>
   <div>
        <h1 class="titleCard"><span>PROXIMAS</span> RESENHAS</h1>
    </div>
    <div class="flex-card"> {{ $nome }}
    @foreach ($eventos as $evento)
        <div class="card">
            <div class="div-img-card">
                <img src="{{$evento->imgURL}}"
                    alt="">
            </div>
            <div class="descricao-card">
               
                <p>Daqui ...</p>
                <h2>{{$evento->nome}}</h2>
            </div>
        </div>
    @endforeach 
    </div>
    <div class="div-refresh">
        <img src="{{ asset('assets/refresh.png') }}">
    </div>
</section>