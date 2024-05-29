@extends('.layouts.TelaPrincipal')

@section('card')
    <div>
        <h1><span>PROXIMAS</span> RESENHAS</h1>
    </div>
    <div class="flex-card">
    @foreach ($cards as $card)
        <div class="card">
            <div class="div-img-card">
                <img src="https://araujoviannaoficial.com.br/wp-content/uploads/2022/12/1C8A4F7E-D2DB-434B-A848-A1AD8173B2D1.png"
                    alt="">
            </div>
            <div class="descricao-card">
               
                <p>{{$card->data}}</p>
                <h2>{{$card->titulo}}</h2>
            </div>
        </div>
    @endforeach 
        <div class="card">
            <div class="div-img-card">
                <img src="https://www.designi.com.br/images/preview/10312743.jpg" alt="">
            </div>
            <div class="descricao-card">
                <p>Resenha Hoje</p>
                <h2>Saiba Mais</h2>
            </div>
        </div>
    </div>
    <div class="div-refresh">
        <img src="{{ asset('assets/refresh.png') }}">
    </div>
@endsection