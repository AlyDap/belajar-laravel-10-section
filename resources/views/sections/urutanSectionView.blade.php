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
  .form-check-input {
   cursor: pointer;
  }

  /* Merubah warna latar belakang toggle switch ketika dalam keadaan aktif */
  .form-check-input:checked {
   background-color: green !important;
   /* Mengubah warna latar belakang menjadi hijau */
  }

  /* Merubah warna latar belakang toggle switch ketika dalam keadaan tidak aktif */
  .form-check-input:not(:checked) {
   background-color: red !important;
   /* Mengubah warna latar belakang menjadi merah */
  }
 </style>
</head>

<body>
 <div class="container-fluid">
  <div class="row">
   <div class="col-12 p-5">
    <div class="table-responsive card shadow px-2">
     <table class="table table-striped">
      <thead class="text-center">
       <tr>
        <th>No</th>
        <th>Deskripsi Section</th>
        <th>Jenis Section</th>
        <th>Posisi</th>
        <th>Status</th>
        <th>Aksi</th>
        {{-- <th>Status</th> --}}
      </thead>
      <tbody>
       @foreach ($dataSection as $key => $item)
        <tr>
         <td class="text-center">{{ $item->urutan_section }}</td>
         <td>{{ $item->deskripsi_section }}</td>
         <td>{{ $item->jenis_section }}</td>
         <td class="text-center">
          <!-- Jika item bukan yang pertama -->
          @if ($key != 0)
           {{-- form ganti urutan section --}}
           <form action="{{ route('urutansection.naik', ['id' => $item->id]) }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $item->id }}">
            <button type="submit" class="badge rounded-pill text-bg-secondary border-0 posisinaik">
             <i class="bi bi-chevron-double-up"></i>
            </button>
           </form>
          @endif
          <!-- Jika item bukan yang terakhir -->
          @if ($key != count($dataSection) - 1)
           <form action="{{ route('urutansection.turun', ['id' => $item->id]) }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $item->id }}">
            <button type="submit" class="badge rounded-pill text-bg-secondary border-0 posisiturun">
             <i class="bi bi-chevron-double-down"></i>
            </button>
           </form>
          @endif
         </td>
         <td class="text-center">
          {{-- form ganti status section --}}
          <form action="{{ route('urutansection.status', ['id' => $item->id]) }}" method="post">
           @csrf
           <div class="form-check form-switch d-flex justify-content-center align-items-center">
            <input type="hidden" name="status" value="{{ $item->status == 'active' ? 'inactive' : 'active' }}">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked"
             {{ $item->status == 'active' ? 'checked' : '' }} onchange="this.form.submit()">
           </div>
          </form>
         </td>
         <td class="text-center">
          <a href="{{ route('urutansection.detail', ['id' => $item->id]) }}" type="button">
           <span class="badge rounded-pill text-bg-info"><i class="bi bi-zoom-in"></i></span>
          </a>
          <a href="#"><span class="badge rounded-pill text-bg-warning"><i
             class="bi bi-pencil-square"></i></span></a>
          <form action="{{ route('urutansection.delete', ['id' => $item->id]) }}" method="post">
           @csrf
           <input type="hidden" name="id" value="{{ $item->id }}">
           <button type="submit" class="badge rounded-pill text-bg-danger border-0 posisiturun">
            <i class="bi bi-trash3"></i>
           </button>
          </form>
         </td>
        </tr>
       @endforeach

      </tbody>
     </table>
    </div>
   </div>
   {{-- Content di bawah tabel section --}}
   <div class="col-12 p-5">
    <div class="table-responsive card shadow px-2">
     <br>
     <a href="{{ route('urutansection.backup') }}" class="btn btn-dark" type="button">Backup Section</a>
     <br>
     <a href="#" class="btn btn-secondary" type="button">Tambah Section</a>
     <br>
     <a href="{{ route('/') }}" class="btn btn-primary" type="button">Tampilan Urutan Section Landing Page</a>
     <br>
     <h4>Progress</h4>
     <ul>
      <li>Dikerjakan: show/detail tiap jenis section</li>
      <li>Sudah bisa: naik turun section, on off section</li>
      <li>Tapi belum bisa tampil sweetalert</li>
      <li>Belum bisa: (add, edit, delete | section)</li>
     </ul>
     <h4>Fungsi</h4>
     <ul>
      <li>Saat klik tambah section maka urutan otomatis menjadi terakhir dan bisa diubah urutannya pada update nanti
      </li>
      <li>Jadi saat klik update warna kuning pada tabel ini akan mengupdate deskripsi dan jenis section, jika jenis
       section diupdate
       maka akan menghapus data section sebelumnya di tabel relasi?</li>
      <li>Jika ingin mengupdate isi sectionya maka harus klik show warna biru muda</li>
      <li>Jika delete warna merah maka akan menghapus datanya, sebelum itu urutan section akan diedit agar selisih tiap
       urutan tetap 1. Misal yang dihapus adala urutan section 3 sedangkan ada 5 section, maka section urutan ke 3 akan
       diubah menjadi urutan ke 0 dan yang urutan 4 ke bawah akan dikurangi 1, kemudian baru hapus urutan section 0. Ini
       karena urutan section bersifat uniq</li>
      <li>Saat klik backup section akan menampilkan tabel yang sudah dihapus dengan urutan_section uuid, jika klik
       pulihkan maka urutan_section akan berubah menjadi urutan yang terakhir. Begitu juga untuk tabel turunannya.</li>
     </ul>
     <h4>UI / UX</h4>
     <ul>
      <li>Tampilan status yang ijo besar yang merah mengecil, sepertinya bawaan bootstrap, karena saya hanya mengganti
       bg-color nya saja jadi hijau dan merah</li>
      <li>Kenapa saat diterapkan pada datatables, kolom tidak dapat membesar dan mengecil, masih statis, walau sudah
       diberi responsive tetapi hanya scroll saja</li>
     </ul>

    </div>
   </div>
  </div>
 </div>

 {{-- bootstrap --}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

 {{-- ikon naik turun urutan section diklik --}}
 <script>
  // Menangkap elemen dengan kelas "posisinaik" dan menambahkan event listener
  var posisinaikElements = document.querySelectorAll(".posisinaik");
  posisinaikElements.forEach(function(element) {
   element.addEventListener("click", function() {
    console.log("NAIK");
   });
  });

  // Menangkap elemen dengan kelas "posisiturun" dan menambahkan event listener
  var posisiturunElements = document.querySelectorAll(".posisiturun");
  posisiturunElements.forEach(function(element) {
   element.addEventListener("click", function() {
    console.log("TURUN");
   });
  });
 </script>


</body>

</html>
