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
