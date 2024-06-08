@extends('.layouts.TelaPrincipal')

@section('card')
    <div>
        <h1><span>PROXIMAS</span> RESENHAS</h1>
    </div>
    <div class="flex-card">
    @foreach ($cards as $card)
        <div class="card">
            <div class="div-img-card">
                <img src="{{$card->imgURL}}"
                    alt="">
            </div>
            <div class="descricao-card">
               
                <p>{{$card->data}}</p>
                <h2>{{$card->titulo}}</h2>
            </div>
        </div>
    @endforeach 
    </div>
    <div class="div-refresh">
        <img src="{{ asset('assets/refresh.png') }}">
    </div>
@endsection