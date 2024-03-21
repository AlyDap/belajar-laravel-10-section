<?php

namespace App\Http\Controllers;

use App\Models\Section_Gambar;
use App\Models\Section_Gbr_Hdg_Prgf;
use App\Models\Section_Peta;
use App\Models\Section_Slideshow;
use App\Models\Section_Tulisan;
use App\Models\Slideshow_Gambar;
use App\Models\Urutan_Section;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class UrutanSectionController extends Controller
{
 public function index()
 {
  // Mengambil semua data dari tabel Urutan_Section
  // $urutanSection = Urutan_Section::all();
  $urutanSection = Urutan_Section::orderBy('urutan_section')->get();
  //id_section= foreign key
  $sectionGambar = Section_Gambar::all()->keyBy('id_section');
  $sectionPeta = Section_Peta::all()->keyBy('id_section');
  $sectionTulisan = Section_Tulisan::all()->keyBy('id_section');
  $sectionSlideshow = Section_Slideshow::all()->keyBy('id_section');
  $SlideshowGambar = Slideshow_Gambar::all();
  $sectionGHP = Section_Gbr_Hdg_Prgf::all()->keyBy('id_section');
  // Menyiapkan array untuk menyimpan hasil
  $sectionData = [];
  $col = '<div class="col-12 m-0 p-0">';
  $penutupDiv = '</div>';

  // Melakukan iterasi melalui setiap baris data
  foreach ($urutanSection as $section) {

   // section_slideshows
   if ($section->jenis_section === 'slide show') {
    // $sectionData[] = $col;

    $sectionSlideshowId = $sectionSlideshow[$section->id] ?? null;
    if ($sectionSlideshowId) {
     $sectionData[] = '<div class="col-8 my-3 d-flex justify-content-center align-items-center p-0 m-0 border shadow">
     <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-inner">';
     // perulangan img slideshow
     $isFirstSlide = true;

     foreach ($SlideshowGambar as $slideshow) {
      if ($slideshow->id_slideshow === $sectionSlideshowId->id) {
       if ($isFirstSlide) {
        $sectionData[] = '<div class="carousel-item active">
                     <img src="/img/landing_page/' . $slideshow->file_gambar . '" class="d-block w-100" alt="gambar slideshow">
                 </div>';
        $isFirstSlide = false;
       } else {
        $sectionData[] = '<div class="carousel-item">
                     <img src="/img/landing_page/' . $slideshow->file_gambar . '" class="d-block w-100" alt="gambar slideshow">
                 </div>';
       }
      }
     }
     $sectionData[] = '</div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
     </button>
   </div>
  </div>';
    }


    // section_petas
   } elseif ($section->jenis_section === 'peta') {
    $sectionPetaId = $sectionPeta[$section->id] ?? null;
    // dd($sectionPetaId);
    if ($sectionPetaId) {
     $sectionData[] = $col;
     $sectionData[] = $sectionPetaId->url_peta;
     $sectionData[] = $penutupDiv;
    }


    // section_gambars
   } elseif ($section->jenis_section === 'gambar full') {
    // $sectionGambar = Section_Gambar::where('id_section', $section->id)->where('jenis_section', 'gambar full')->first();
    // $sectionGambarId = Section_Gambar::where('id_section', $section->id)->first();

    // Mengambil data Section_Gambar menggunakan referensi langsung ke Urutan_Section
    $sectionGambarId = $sectionGambar[$section->id] ?? null;
    if ($sectionGambarId) {
     $sectionData[] = $col;
     $sectionData[] = '<img class="section-gambar-besar" src="/img/landing_page/' . $sectionGambarId->file_gambar . '" alt="' . $sectionGambarId->file_gambar . '">';
     $sectionData[] = $penutupDiv;
    }


    // section_tulisans
   } elseif ($section->jenis_section === 'tulisan dengan bg warna full') {
    $sectionData[] = $col;
    $sectionData[] = '<div class="bg-primary d-flex align-items-center text-center justify-content-center fs-2 py-5">' . $section->deskripsi_section . '</div>';
    $sectionData[] = $penutupDiv;


    // section_gbrh_hdg_prgfs
   } elseif ($section->jenis_section === 'gambar heading paragraf') {
    $sectionData[] = $col;
    $sectionData[] = '<p>' . $section->deskripsi_section . '</p>';
    $sectionData[] = $penutupDiv;
   }


   // garis
   // $sectionData[] = '<hr>';
  }


  // Mengirimkan data ke view 'section' untuk ditampilkan
  return view('section', ['sectionData' => $sectionData]);
 }
}
