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
  iframe {
   width: 100%;
   height: 300px;
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
  }

  .gambaratasbawah {
   height: 100px;
   width: 100px;
   object-fit: cover;

  }
 </style>
</head>

<body>
 <div class="container-fluid">
  <div class="row">
   {{-- <div class="col p-0">
    <img src="/img/landing_page/gambar2.png" alt="manms" style="width: 100%">

   </div> --}}

   @foreach ($sectionData as $data)
    {!! $data !!}
   @endforeach

  </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
