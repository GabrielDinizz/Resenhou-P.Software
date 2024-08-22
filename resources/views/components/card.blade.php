<section>
   <div>
        <h1 class="titleCard"><span>PROXIMAS</span> RESENHAS</h1>
    </div>
    <div class="flex-card"> 
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
    <!-- Se $eventos for do tipo LengthAwarePaginator gera a paginação, contudo se for do tipo Collection não gera, pois o objeto Collection não possui o método links  -->
    @if (get_class($eventos) == 'Illuminate\Pagination\LengthAwarePaginator')
        {{$eventos->links()}}
    @endif
    <!-- dd(variavel) -> Exibe o conteúdo do objeto na view -> semelhante ao var_dump() -->
    </div>
    <div class="div-refresh">
        <img src="{{ asset('assets/refresh.png') }}">
    </div>
    <div class="carousel">
    <button class="prev">&#9664;</button>
    <div class="carousel-track-container">
        <div class="carousel-track">
            <div class="carousel-item">
                <div class="circle"></div>
                <p>Funk</p>
            </div>
            <div class="carousel-item">
                <div class="circle"></div>
                <p>Rap</p>
            </div>
            <div class="carousel-item">
                <div class="circle"></div>
                <p>Pagode</p>
            </div>
            <div class="carousel-item">
                <div class="circle"></div>
                <p>Kpop</p>
            </div>
            <div class="carousel-item">
                <div class="circle"></div>
                <p>Pop</p>
            </div>
            <div class="carousel-item">
                <div class="circle"></div>
                <p>Rock</p>
            </div>
        </div>
    </div>
    <button class="next">&#9654;</button>
</div>

<script>const track = document.querySelector('.carousel-track');
const items = document.querySelectorAll('.carousel-item');
const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

let currentIndex = 0;
const itemsPerPage = 3;

function updateCarousel() {
    const offset = -currentIndex * (items[0].offsetWidth + 10); // ajuste para a margem
    track.style.transform = `translateX(${offset}px)`;
}

prevButton.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex -= 1; // Muda para apenas 1 item por clique
    }
    updateCarousel();
});

nextButton.addEventListener('click', () => {
    if (currentIndex < items.length - itemsPerPage) {
        currentIndex += 1; // Muda para apenas 1 item por clique
    }
    updateCarousel();
});


</script>
</section>

