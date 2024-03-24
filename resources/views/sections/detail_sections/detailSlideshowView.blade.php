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
       <a href="#"><span class="badge rounded-pill text-bg-warning"><i class="bi bi-pencil-square"></i></span></a>
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
{{-- Tampilan Landing Page --}}
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
