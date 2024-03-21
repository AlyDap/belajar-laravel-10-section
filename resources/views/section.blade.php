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
  }

  .gambaratasbawah {
   height: 100px;
   width: 100px;
   object-fit: cover;

  }
 </style>
</head>

<body>
 <div class="container-fluid m-0">
  <div class="row d-flex justify-content-center align-items-center">

   @foreach ($sectionData as $data)
    {!! $data !!}
   @endforeach


   <hr>
   <hr>
   <hr>
   <div class="col-md-4 col-12 d-flex justify-content-center align-items-center">
    <div class="row-12">
     <div class="col-12">
      <img src="/img/landing_page/gambar1.png" alt="gambarr" class="gambaratasbawah my-2 rounded-circle img-fluid">
     </div>
     <div class="col-12">
      <img src="/img/landing_page/gambar2.png" alt="gambarr" class="gambaratasbawah my-2 rounded-circle img-fluid">
     </div>
     <div class="col-12">
      <img src="/img/landing_page/gambar3.png" alt="gambarr" class="gambaratasbawah my-2 rounded-circle img-fluid">
     </div>
    </div>
   </div>
   <div class="col-md-8 col-12 d-flex align-items-center">
    <div class="row-12">
     <div class="col-12">
      <h1 class="text-center">About</h1>
     </div>
     <div class="col-12">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nostrum sapiente assumenda autem, odio iure a
       quis quae quidem reiciendis enim tenetur facere culpa neque in exercitationem animi id rem debitis iste saepe
       delectus, optio placeat voluptatum. Exercitationem, architecto nobis!</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nostrum sapiente assumenda autem, odio iure a
       quis quae quidem reiciendis enim tenetur facere culpa neque in exercitationem animi id rem debitis iste saepe
       delectus, optio placeat voluptatum. Exercitationem, architecto nobis!</p>
     </div>
     <div class="col-12">
      <h1 class="text-center">Visi Misi</h1>
     </div>
     <div class="col-12">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nostrum sapiente assumenda autem, odio iure a
       quis quae quidem reiciendis enim tenetur facere culpa neque in exercitationem animi id rem debitis iste saepe
       delectus, optio placeat voluptatum. Exercitationem, architecto nobis!</p>
     </div>
    </div>
   </div>
  </div>


  <hr>
  <hr>
  <hr>
  <hr>
 </div>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
