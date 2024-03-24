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
  <div class="row">
   <div class="col-2"></div>
   <div class="col-8">
    {{-- nampilin heading --}}
    @foreach ($detailSectionH as $head)
     <div class="row d-flex border align-items-center p-0 m-0">
      <div class="col-1 p-0 px-1 text-center">
       <a href="#"><span class="badge rounded-pill text-bg-warning"><i class="bi bi-pencil-square"></i></span></a>
       <a href="#"><span class="badge rounded-pill text-bg-danger"><i class="bi bi-trash3"></i></span></a>
      </div>
      <div class="col-11 p-0 pt-1 d-flex">
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
        <div class="col-1 p-0 px-1 text-center">
         <a href="#"><span class="badge rounded-pill text-bg-warning"><i
            class="bi bi-pencil-square"></i></span></a>
         <a href="#"><span class="badge rounded-pill text-bg-danger"><i class="bi bi-trash3"></i></span></a>
        </div>
        <div class="col-11 p-0 pt-2">
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
{{-- Tampilan Landing Page --}}
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
