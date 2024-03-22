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
 </style>
</head>

<body>
 <div class="container-fluid">
  <div class="col mb-5">
   {{-- urutan section --}}
   <div class="row-12 px-5 py-3">
    <div class="card shadow px-2">
     <p>Urutan ke-{{ $dataSection->urutan_section }}</p>
     <p>Jenis : {{ $dataSection->jenis_section }}</p>
     <p>Deskripsi : {{ $dataSection->deskripsi_section }}</p>
    </div>
   </div>
   {{-- section  slideshow --}}
   @if ($dataSection->jenis_section == 'slide show')
    <div class="row px-5 py-3 row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
     @foreach ($detailSection as $item)
      <div class="col">
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
   @elseif ($dataSection->jenis_section == 'peta')
    <div class="row-12 px-5">
     <div class="card shadow ">
      {!! $detailSection !!}
     </div>
    </div>
   @elseif ($dataSection->jenis_section == 'gambar full')
    <div class="row-12 px-5">
     <div class="card shadow px-2">
     </div>
    </div>
   @elseif ($dataSection->jenis_section == 'tulisan dengan bg warna full')
    <div class="row-12 px-5">
     <div class="card shadow px-2">
     </div>
    </div>
   @elseif ($dataSection->jenis_section == 'gambar heading paragraf')
    <div class="row-12 px-5">
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
