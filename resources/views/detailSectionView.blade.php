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
</head>

<body>
 <div class="container-fluid">
  <div class="col">
   <div class="row-12 p-5">
    <div class="table-responsive card shadow px-2">
     {{-- <table class="table table-striped">
      <thead class="text-center">
       <tr>
        <th>No</th>
        <th>Deskripsi Section</th>
        <th>Jenis Section</th>
      </thead>
      <tbody>
       @foreach ($dataSection as $item)
        <tr>
         <td class="text-center">{{ $item }}</td>
         <td>{{ $item }}</td>
         <td>{{ $item }}</td>
        </tr>
       @endforeach
      </tbody>
     </table> --}}
     <p>{{ $deskripsi }}</p>
     <p>{{ $jenis }}</p>
     <p>{{ $urutan }}</p>
    </div>
   </div>
  </div>
 </div>

 {{-- bootstrap --}}
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
