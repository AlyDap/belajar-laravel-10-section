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
   {{-- section slideshow --}}
   @if ($dataSection->jenis_section == 'slide show')
    <div class="col-12">
     <div class="row justify-content-center">
      @php
       $no_urut = 0;
      @endphp
      @foreach ($detailSection as $item)
       <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
        <div class="card shadow">
         <img src="/img/landing_page/{{ $item->file_gambar }}" class="card border-0" alt="{{ $item->file_gambar }}">
         <div class="card-img-overlay p-0 d-flex flex-column">
          <div class="py-0 px-1">
           <span class="badge rounded-pill text-bg-secondary">{{ ++$no_urut }}</span>
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
      {{-- keterangan slideshow --}}
      <div class="col-12">
       <div class="row">
        <div class="col-6 card shadow mb-3">
         <div class=""></div>
         <h3>Keterangan</h3>
         <ul>
          <li>klik show badge warna biru muda bisa lihat gambar full</li>
          <li>klik edit bisa ganti gambarnya, datanya berubah di database, lalu gambar yang dulu akan dihapus dan gambar
           baru masuk storage. Akan tampil modal saat edit</li>
          <li>klik delete bisa hapus gambarnya di database dan file imgnya. Untuk delete apakah ada batasan gambarnya
           ada berapa misal minimal ada 2 gambar untuk slideshow, jika gambar sudah 2 maka tidak ada badge tong sampah,
           saat input slide show juga minimal 2 gambar</li>
          <li>klik unduh bisa download gambarnya</li>
         </ul>
        </div>
        <div class="col-6 card shadow mb-3 ">
         <h3>Progress</h3>
         <h5>Sudah</h5>
         <ul>
          <li>----</li>
         </ul>
         <h5>Belum</h5>
         <ul>
          <li>fungsi show full gambar</li>
          <li>fungsi edit gambar</li>
          <li>fungsi delete gambar</li>
          <li>fungsi download gambar</li>
         </ul>
        </div>
       </div>
      </div>
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
         {{-- Tombol geser slide show --}}
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
     <div class="card shadow mb-3">
      {!! $detailSection !!}
     </div>
     <button type="button" class="btn btn-warning">Ubah Peta</button>
    </div>
    {{-- keterangan peta --}}
    <div class="col-12 mt-3">
     <div class="row">
      <div class="col-6 card shadow mb-3">
       <div class=""></div>
       <h3>Keterangan</h3>
       <ul>
        <li>klik ubah akan mengubah peta dan di dalam form nya ada link menuju google maps serta video panduan untuk
         copy paste embeded url petanya. Akan tampil modal untuk ubahnya</li>
        <li>Tidak ada hapus karena jika hapus maka saat jenis_section == peta tidak akan menampilkan apapun, kalau ingin
         hapus ya hapus di tabel urutan_sesction nya</li>
       </ul>
      </div>
      <div class="col-6 card shadow mb-3 ">
       <h3>Progress</h3>
       <h5>Sudah</h5>
       <ul>
        <li>----</li>
       </ul>
       <h5>Belum</h5>
       <ul>
        <li>Fungsi edit peta</li>
       </ul>
      </div>
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
    {{-- Keterangan gambar full --}}
    <div class="col-12 mt-3">
     <div class="row">
      <div class="col-6 card shadow mb-3">
       <h3>Keterangan</h3>
       <ul>
        <li>klik ubah akan mengubah gambar Akan tampil modal untuk ubahnya, gambar lama dihapus distorage dan gambar
         baru masuk storage</li>
        <li>Simpan warna ijo bisa simpan / download gambarnya</li>
        <li>Tidak ada hapus karena jika hapus maka saat jenis_section == gambar full tidak akan menampilkan apapun,
         kalau ingin
         hapus ya hapus di tabel urutan_sesction nya</li>
       </ul>
      </div>
      <div class="col-6 card shadow mb-3 ">
       <h3>Progress</h3>
       <h5>Sudah</h5>
       <ul>
        <li>----</li>
       </ul>
       <h5>Belum</h5>
       <ul>
        <li>Fungsi edit gambar</li>
        <li>Fungsi download / unduh gambar</li>
       </ul>
      </div>
     </div>
    </div>
    {{-- Section Text bg-color full --}}
   @elseif ($dataSection->jenis_section == 'tulisan dengan bg warna full')
    <div class="col-12">
     <div class="shadow mb-3">
      <div class="bg-primary d-flex align-items-center text-center justify-content-center fs-2 py-5">
       {{ $detailSection->tulisan }}
      </div>
     </div>
     <div class="">
      <button type="button" class="btn btn-warning">Ubah Tulisan</button>
     </div>
    </div>
    {{-- Keterangan tulisan dengan bg warna full --}}
    <div class="col-12 mt-3">
     <div class="row">
      <div class="col-6 card shadow mb-3">
       <h3>Keterangan</h3>
       <ul>
        <li>klik ubah akan mengubah tulisan. Akan tampil modal untuk ubahnya</li>
        <li>Tidak ada hapus karena jika hapus maka saat jenis_section == tulisan blablabla tidak akan menampilkan
         apapun,
         kalau ingin
         hapus ya hapus di tabel urutan_section nya</li>
       </ul>
      </div>
      <div class="col-6 card shadow mb-3 ">
       <h3>Progress</h3>
       <h5>Sudah</h5>
       <ul>
        <li>----</li>
       </ul>
       <h5>Belum</h5>
       <ul>
        <li>Fungsi ubah tulisan</li>
       </ul>
      </div>
     </div>
    </div>
    {{-- Section gambar heading paragraf --}}
   @elseif ($dataSection->jenis_section == 'gambar heading paragraf')
    <div class="col-12">
     <div class="row justify-content-center">
      <div class="col-12 mb-3">

       <button type="button" class="btn btn-primary">Tambah Gambar</button>
       <button type="button" class="btn btn-info">Tambah Judul</button>
      </div>
      {{-- nampilin gambar dulu --}}
      @php
       $no_urut = 0;
      @endphp
      @foreach ($detailSection as $item)
       <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
        <div class="card shadow">
         <img src="/img/landing_page/{{ $item->file_gambar }}" class="card border-0"
          alt="{{ $item->file_gambar }}">
         <div class="card-img-overlay p-0 d-flex flex-column">
          <div class="py-0 px-1">
           <span class="badge rounded-pill text-bg-secondary">{{ ++$no_urut }}</span>
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
      <div class="row">
       <div class="col-2"></div>
       <div class="col-8">
        {{-- nampilin heading --}}
        @foreach ($detailSectionH as $head)
         <div class="row d-flex border align-items-center p-0 m-0">
          <div class="col-1 p-1 text-center">
           <a href="#"><span class="badge rounded-pill text-bg-warning"><i
              class="bi bi-pencil-square"></i></span></a>
           <a href="#"><span class="badge rounded-pill text-bg-danger"><i class="bi bi-trash3"></i></span></a>
          </div>
          <div class="col-11 p-1 pt-1 d-flex">
           <div class="row">
            <div class="col">
             <h1>{{ $head->nama_heading }}</h1>
            </div>
            <div class="col-auto d-flex align-items-center justify-content-center">
             <button type="button" class="btn btn-sm btn-primary">Tambah Paragraf</button>
            </div>
           </div>
          </div>
         </div>
         {{-- </div> --}}
         @foreach ($detailSectionP as $paragraf)
          @if ($paragraf->id_gbr_hdg_prgf_head == $head->id)
           <div class="row d-flex border align-items-center p-0 m-0">
            <div class="col-1 p-1 text-center">
             <a href="#"><span class="badge rounded-pill text-bg-warning"><i
                class="bi bi-pencil-square"></i></span></a>
             <a href="#"><span class="badge rounded-pill text-bg-danger"><i
                class="bi bi-trash3"></i></span></a>
            </div>
            <div class="col-11 p-1 pt-1">
             <p>{{ $paragraf->text_paragraf }}</p>
            </div>
           </div>
          @endif
         @endforeach
        @endforeach
       </div>
       <div class="col-2"></div>
      </div>
     </div>
    </div>
    {{-- Keterangan gambar heading paragraf --}}
    <div class="col-12 mt-3">
     <div class="row">
      <div class="col-6 card shadow mb-3">
       <h3>Keterangan</h3>
       <ul>
        <li>Minimal ada 1 gambar, 1 judul, 1 paragraf</li>
        <li>Semua tombol edit akan memunculkan modal</li>
        <li>Tombol tambah gambar dan tambah judul juga modal</li>
        <li>Muncul notif saat mau hapus tapi data ada 1</li>
       </ul>
      </div>
      <div class="col-6 card shadow mb-3 ">
       <h3>Progress</h3>
       <h5>Sudah</h5>
       <ul>
        <li>----</li>
       </ul>
       <h5>Belum</h5>
       <ul>
        <li>Gambar = add, show, edit, delete, download</li>
        <li>Judul = add, edit, delete</li>
        <li>Paragraf = add, edit, delete</li>
       </ul>
      </div>
     </div>
    </div>

    <div class="col-12 mb-3 p-0">
     <h3>Tampilan pada landing Page</h3>
     <div class="row p-0">
      <div class="col-md-4 col-12 d-flex justify-content-center align-items-center mb-5">
       <div class="row-12">
        @foreach ($detailSection as $item)
         <div class="col-12">
          <img src="/img/landing_page/{{ $item->file_gambar }}" alt="{{ $item->file_gambar }}"
           class="gambaratasbawah my-2 rounded-circle img-fluid">
         </div>
        @endforeach
       </div>
      </div>
      <div class="col-md-8 col-12 d-flex align-items-center mb-5">
       <div class="row-12">

        @foreach ($detailSectionH as $head)
         <div class="col-12">
          <h1 class="text-center">{{ $head->nama_heading }}</h1>
         </div>
         <div class="col-12">
          @foreach ($detailSectionP as $paragraf)
           @if ($paragraf->id_gbr_hdg_prgf_head == $head->id)
            <p>{{ $paragraf->text_paragraf }}</p>
           @endif
          @endforeach
         </div>
        @endforeach
       </div>
      </div>
     </div>
    </div>

    {{-- end section --}}
   @endif
  </div>
 </div>

 {{-- bootstrap --}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
