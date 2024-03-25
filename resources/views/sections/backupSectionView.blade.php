<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Backup Section</title>
 {{-- bootstrap --}}
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 {{-- ikon bootstrap --}}
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 <style>
  /* .form-check-input {
   cursor: pointer;
  } */

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
        <th>Status</th>
        <th>Aksi</th>
        {{-- <th>Status</th> --}}
      </thead>
      <tbody>
       @foreach ($dataSection as $key => $item)
        <tr>
         <td class="text-center">{{ ++$key }}</td>
         <td>{{ $item->deskripsi_section }}</td>
         <td>{{ $item->jenis_section }}</td>
         <td class="text-center">
          {{-- form ganti status section --}}
          <div class="form-check form-switch d-flex justify-content-center align-items-center">
           <input class="form-check-input" disabled type="checkbox" role="switch" id="flexSwitchCheckChecked"
            {{ $item->status == 'active' ? 'checked' : '' }}>
          </div>
         </td>
         <td class="text-center">
          <a href="{{ route('urutansection.detail.trash', ['id' => $item->id]) }}" type="button">
           <span class="badge rounded-pill text-bg-info"><i class="bi bi-zoom-in"></i></span>
          </a>
          <form action="{{ route('urutansection.backupSection', ['id' => $item->id]) }}" method="post">
           @csrf
           <input type="hidden" name="id" value="{{ $item->id }}">
           <button type="submit" class="badge rounded-pill text-bg-danger border-0 posisiturun">
            Pulihkan
           </button>
          </form>
         </td>
        </tr>
       @endforeach

      </tbody>
     </table>
    </div>
   </div>
   <div class="col-12">
    <div class="table-responsive card shadow px-2">
     <br>
     <a href="{{ route('urutansection.index') }}" class="btn btn-dark" type="button">Tabel Section</a>
     <br>
     <a href="{{ route('/') }}" class="btn btn-primary" type="button">Tampilan Urutan Section Landing Page</a>
     <br>
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
