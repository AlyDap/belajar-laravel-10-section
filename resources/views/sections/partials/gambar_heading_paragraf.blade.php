<div class="row my-5">
    <div class="col-12 mb-5 p-0">
        @foreach ($data->ghp->images as $img)
            <img src="{{ asset("img/landing_page/$img->file_gambar") }}" class="d-block w-100" alt="...">
        @endforeach

        @foreach ($data->ghp->heading as $head)
            <h1>{{ $head->nama_heading }}</h1>
            @foreach ($head->paragrafs as $p)
                <p>{{ $p->text_paragraf }}</p>
            @endforeach
        @endforeach
    </div>
</div>