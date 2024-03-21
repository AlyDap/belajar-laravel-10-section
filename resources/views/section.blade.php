<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Section</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

 <style>
  /* Mengatur lebar dan tinggi elemen iframe */
  iframe {
   width: 100%;
   /* ganti dengan lebar yang diinginkan */
   height: 300px;
   /* ganti dengan tinggi yang diinginkan */
  }

  .section-gambar-besar {
   width: 100%;
   height: 400px;
   object-fit: cover;
   object-position: center;
  }

  .carousel-item img {
   height: 350px;
   object-fit: cover;
   /* Menghindari distorsi gambar */
   /* Agar gambar tetap responsif */
  }
 </style>
</head>

<body>
 <div class="container-fluid m-0">
  <div class="row">

   @foreach ($sectionData as $data)
    {!! $data !!}
   @endforeach

  </div>

  {{-- <div class="row my-3 d-flex justify-content-center align-items-center">
   <div class="col-9 p-0 m-0 border shadow">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-inner">
      <div class="carousel-item active">
       <img src="/img/landing_page/slideshow-1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
       <img src="/img/landing_page/slideshow-2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
       <img src="/img/landing_page/slideshow-3.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
       <img src="/img/landing_page/slideshow-4.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
       <img src="/img/landing_page/slideshow-5.png" class="d-block w-100" alt="...">
      </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
     </button>
    </div>
   </div>
  </div> --}}
  <hr>
  <hr>
  <hr>
  <hr>
 </div>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
