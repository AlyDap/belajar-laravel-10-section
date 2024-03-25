<div class="row my-5">
    <div class="col-12">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                @foreach ($data->slideImages as $i => $img)
                    <div class="carousel-item {{ $i == 0 ? 'active' : ''}}">
                        <img src="{{ asset("img/landing_page/$img->file_gambar") }}" class="d-block w-100" alt="...">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>