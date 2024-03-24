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

  .gambaratasbawah {
   height: 100px;
   width: 100px;
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
     <p>Status : @if ($dataSection->status == 'active')
       Aktif
      @else
       Tidak Aktif
      @endif
     </p>
     <p>
      <a href="/urutansection" type="button" class="btn btn-dark">BACK</a>
     </p>
    </div>
   </div>
   @if ($dataSection->jenis_section == 'slide show')
    @include('sections.detail_sections.detailSlideshowView')
   @elseif ($dataSection->jenis_section == 'peta')
    @include('sections.detail_sections.detailPetaView')
   @elseif ($dataSection->jenis_section == 'gambar full')
    @include('sections.detail_sections.detailGambarFullView')
   @elseif ($dataSection->jenis_section == 'tulisan dengan bg warna full')
    @include('sections.detail_sections.detailTulisanBgFullView')
   @elseif ($dataSection->jenis_section == 'gambar heading paragraf')
    @include('sections.detail_sections.detailGHPView')
   @endif
  </div>
 </div>

 {{-- bootstrap --}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
