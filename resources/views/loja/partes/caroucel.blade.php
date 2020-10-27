<div id="carouselExampleFade" class="carousel slide carousel-fade pt-3" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://picsum.photos/900/300?random=1"  alt="...">
        </div>
        @foreach(range(2,8) as $i)
        <div class="carousel-item ">
            <img class="d-block w-100" src="https://picsum.photos/900/300?random={{$i}}">
        </div>
        @endforeach

    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>