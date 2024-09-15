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
    <div class="carousel">
    <button class="prev">&#9664;</button>
    <div class="carousel-track-container">
        <div class="carousel-track">
            <div class="carousel-item" data-category="funk">
                <a href="{{ route('list-eventos', ['categoria' => 'funk']) }}">
                    <div class="circle">
                        <img src="https://i.pinimg.com/originals/36/cc/3a/36cc3a17a43ff10593dc22bc8690f687.jpg" alt="">
                    </div>
                </a>
                <p>Funk</p>
            </div>
            <div class="carousel-item" data-category="rap">
                <a href="{{ route('list-eventos', ['categoria' => 'rap']) }}">
                    <div class="circle"><img src="https://wallpaper.dog/large/5547321.jpg" alt=""></div>
                </a>
                <p>Rap</p>
            </div>
            <div class="carousel-item" data-category="pagode">
                <a href="{{ route('list-eventos', ['categoria' => 'pagode']) }}">
                    <div class="circle"><img src="https://as2.ftcdn.net/v2/jpg/02/21/24/49/1000_F_221244921_owoiSCljZt2M0hwbb6Y08SVE88OMcirG.jpg" alt=""></div>
                </a>
                <p>Pagode</p>
            </div>
            <div class="carousel-item" data-category="kpop">
                <a href="{{ route('list-eventos', ['categoria' => 'kpop']) }}">
                    <div class="circle"><img src="https://img.freepik.com/vetores-premium/banner-de-icones-do-kpop_620118-5.jpg?w=826" alt="">
            </div>

                </a>
                <p>Kpop</p>
            </div>
            <div class="carousel-item" data-category="pop">
                <a href="{{ route('list-eventos', ['categoria' => 'pop']) }}">
                    <div class="circle"><img src="https://thebigquiz.net/uploads/2020/12/4fd88a1d8592d58641.jpg" alt=""></div>
                </a>
                <p>Pop</p>
            </div>
            <div class="carousel-item" data-category="rock">
                <a href="{{ route('list-eventos', ['categoria' => 'rock']) }}">
                    <div class="circle"><img src="https://images7.alphacoders.com/436/436860.jpg" alt=""></div>
                </a>
                <p>Rock</p>
            </div>
        </div>
    </div>
    <button class="next">&#9654;</button>
</div>


<script>
const track = document.querySelector('.carousel-track');
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
const carouselItems = document.querySelectorAll('.carousel-item');

carouselItems.forEach(item => {
    item.addEventListener('click', () => {
        const category = item.getAttribute('data-category');

        // Cria a URL usando a rota do Laravel
        const redirectUrl = `{{ route('list-eventos', ['categoria' => '']) }}/${category}`;

        // Redireciona o usuário para a URL gerada
        window.location.href = redirectUrl;
    });
});


</script>
</section>

