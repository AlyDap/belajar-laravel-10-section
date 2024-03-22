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
</head>

<body>
 <div class="container-fluid">
  <div class="col">
   <div class="row-12 p-5">
    <div class="table-responsive card shadow px-2">
     <table class="table table-striped">
      <thead class="text-center">
       <tr>
        <th>No</th>
        <th>Deskripsi Section</th>
        <th>Jenis Section</th>
        <th>Aksi</th>
      </thead>
      <tbody>
       @foreach ($dataSection as $item)
        <tr>
         <td class="text-center">{{ $item->urutan_section }}</td>
         <td>{{ $item->deskripsi_section }}</td>
         <td>{{ $item->jenis_section }}</td>
         <td class="text-center">
          <a href="/urutansection/detail/{{ $item->id }}" type="button">
           <span class="badge rounded-pill text-bg-info"><i class="bi bi-zoom-in"></i></span>
          </a>
          <a href="#"><span class="badge rounded-pill text-bg-warning"><i
             class="bi bi-pencil-square"></i></span></a>
          <a href="#"><span class="badge rounded-pill text-bg-danger"><i class="bi bi-trash3"></i></span></a>
         </td>
        </tr>
       @endforeach
      </tbody>
     </table>
     <hr>
     <h4>Progress</h4>
     <p>Dikerjakan: show/detail tiap jenis section</p>
     <p>Belum bisa: add , edit, delete, aktif, nonaktif</p>
     <hr>
     <h4>Fungsi</h4>
     <p>Saat klik tambah section maka urutan otomatis menjadi terakhir dan bisa diubah urutannya pada update nanti</p>
     <p>Jadi saat klik update warna kuning pada tabel ini akan mengupdate deskripsi dan jenis section, jika jenis
      section diupdate
      maka akan menghapus data section sebelumnya di tabel relasi?</p>
     <p>Jika ingin mengupdate isi sectionya maka harus klik show warna biru muda</p>
     <p>Jika delete warna merah maka akan menghapus datanya, sebelum itu urutan section akan diedit agar selisih tiap
      urutan tetap 1. Misal yang dihapus adala urutan section 3 sedangkan ada 5 section, maka section urutan ke 3 akan
      diubah menjadi urutan ke 0 dan yang urutan 4 ke bawah akan dikurangi 1, kemudian baru hapus urutan section 0. Ini
      karena urutan section bersifat uniq</p>
     <hr>
     <h4>UI / UX</h4>
     <p>Kenapa saat diterapkan pada datatables, kolom tidak dapat membesar dan mengecil, masih statis, walau sudah
      diberi responsive tetapi hanya scroll saja</p>

    </div>
   </div>
  </div>
 </div>

 {{-- bootstrap --}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
