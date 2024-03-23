<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>CRUD Section</title>
 {{-- bootstrap --}}
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 {{-- ikon bootstrap --}}
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 <style>
  iframe {
   width: 100%;
   height: 300px;
  }

  .carousel-item img {
   height: 350px;
   object-fit: cover;
  }
 </style>
</head>

<body>
 <div class="container-fluid">
  <div class="row mb-5 px-5">
   {{-- urutan section --}}
   <div class="col-12 py-3">
    <div class="card shadow px-2 pt-2">
     <p>Urutan ke-{{ $dataSection->urutan_section }}</p>
     <p>Jenis : {{ $dataSection->jenis_section }}</p>
     <p>Deskripsi : {{ $dataSection->deskripsi_section }}</p>
     <p>
      <a href="/urutansection" type="button" class="btn btn-dark">BACK</a>
     </p>
    </div>
   </div>
   {{-- section slideshow --}}
   @if ($dataSection->jenis_section == 'slide show')
    <div class="col-12">
     <div class="row justify-content-center">
      @foreach ($detailSection as $item)
       <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
        <div class="card shadow">
         <img src="/img/landing_page/{{ $item->file_gambar }}" class="card border-0" alt="{{ $item->file_gambar }}">
         <div class="card-img-overlay p-0 d-flex flex-column">
          <div class="py-0 px-1">
           <span class="badge rounded-pill text-bg-secondary">{{ $item->id }}</span>
          </div>
          <div class="text-end p-1 mt-auto">
           <a href="#"><span class="badge rounded-pill text-bg-info"><i class="bi bi-zoom-in"></i></span></a>
           <a href="#"><span class="badge rounded-pill text-bg-warning"><i
              class="bi bi-pencil-square"></i></span></a>
           <a href="#"><span class="badge rounded-pill text-bg-danger"><i class="bi bi-trash3"></i></span></a>
           <a href="#"><span class="badge rounded-pill text-bg-success"><i class="bi bi-floppy"></i></span></a>
          </div>
         </div>
        </div>
       </div>
      @endforeach
     </div>
    </div>
    <div class="col-12">
     <h3>Tampilan Slideshow</h3>
     <div class="row">
      <div class="col-2"></div>
      <div class="col-8 m-0 p-0 border shadow">
       <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
         @php
          $no = 0;
          $first = true;
         @endphp
         @foreach ($detailSection as $item)
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $no++ }}"
           @if ($first) class="active" aria-current="true" @endif></button>
          @php
           $first = false;
          @endphp
         @endforeach
        </div>
        <div class="carousel-inner">
         @php
          $isFirstSlide = true;
         @endphp
         @foreach ($detailSection as $item)
          <div class="carousel-item {{ $isFirstSlide ? 'active' : '' }}">
           <img src="/img/landing_page/{{ $item->file_gambar }}" class="d-block w-100" alt="gambar slideshow">
          </div>
          @php
           $isFirstSlide = false;
          @endphp
         @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
         data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
         data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
        </button>
       </div>
      </div>
      <div class="col-2"></div>
     </div>
    </div>
    {{-- section peta --}}
   @elseif ($dataSection->jenis_section == 'peta')
    <div class="col-12">
     <div class="card shadow ">
      {!! $detailSection !!}
     </div>
    </div>
    {{-- Section Gambar Full --}}
   @elseif ($dataSection->jenis_section == 'gambar full')
    <div class="col-12">
     <div class="card shadow">
      <img src="/img/landing_page/{{ $detailSection }}" class="img-fluid mx-auto d-block card-img-top"
       alt="{{ $detailSection }}">
      <div class="text-end p-1 mb-1 mx-1 mt-auto">
       <a href="#"><span class="badge rounded-pill text-bg-warning"><i class="bi bi-pencil-square"></i></span></a>
       <a href="#"><span class="badge rounded-pill text-bg-success"><i class="bi bi-floppy"></i></span></a>
      </div>
     </div>
    </div>
    {{-- Section Text bg-color full --}}
   @elseif ($dataSection->jenis_section == 'tulisan dengan bg warna full')
    <div class="col-12">
     <div class="card shadow px-2">
     </div>
    </div>
    {{-- Section gambar heading paragraf --}}
   @elseif ($dataSection->jenis_section == 'gambar heading paragraf')
    <div class="col-12">
     <div class="card shadow px-2">
     </div>
    </div>
   @endif
  </div>
 </div>

 {{-- bootstrap --}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
