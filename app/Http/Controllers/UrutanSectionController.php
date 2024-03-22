<?php

namespace App\Http\Controllers;

use App\Models\Gbr_Hdg_Prgf_Gambar;
use App\Models\Gbr_Hdg_Prgf_Heading;
use App\Models\Gbr_Hdg_Prgf_Heading_Paragraf;
use App\Models\Section_Gambar;
use App\Models\Section_Gbr_Hdg_Prgf;
use App\Models\Section_Peta;
use App\Models\Section_Slideshow;
use App\Models\Section_Tulisan;
use App\Models\Slideshow_Gambar;
use App\Models\Urutan_Section;
use Database\Seeders\UrutanSectionSeeder;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class UrutanSectionController extends Controller
{
 protected $urutanSection;
 // protected $sectionGambar, $sectionPeta, $sectionTulisan, $sectionSlideshow, $sectionGHP;
 // protected $slideshowGambar;
 // protected $gambarGHP, $headingGHP, $paragrafHeadingGHP;

 public function __construct()
 {
  $this->urutanSection = Urutan_Section::orderBy('urutan_section')->get();
 }

 public function index()
 {
  $urutanSection = Urutan_Section::orderBy('urutan_section')->get();
  //id_section = foreign key
  $sectionGambar = Section_Gambar::all()->keyBy('id_section');
  $sectionPeta = Section_Peta::all()->keyBy('id_section');
  $sectionTulisan = Section_Tulisan::all()->keyBy('id_section');
  $sectionSlideshow = Section_Slideshow::all()->keyBy('id_section');
  $sectionGHP = Section_Gbr_Hdg_Prgf::all()->keyBy('id_section');
  $slideshowGambar = Slideshow_Gambar::all();
  $gambarGHP = Gbr_Hdg_Prgf_Gambar::all();
  $headingGHP = Gbr_Hdg_Prgf_Heading::all();
  $paragrafHeadingGHP = Gbr_Hdg_Prgf_Heading_Paragraf::all();
  // Menyiapkan array untuk menyimpan hasil
  $sectionData = [];
  $col = '<div class="col-12 mb-5 p-0">';
  $penutupDiv = '</div>';
  // Melakukan iterasi melalui setiap baris data
  foreach ($urutanSection as $section) {
   // section_slideshows DATA PERULANGAN
   if ($section->jenis_section == 'slide show') {
    // $sectionData[] = $col;

    $sectionSlideshowId = $sectionSlideshow[$section->id] ?? null;
    if ($sectionSlideshowId) {
     $sectionData[] = $col . '<div class="row">
      <div class="col-2">
      </div>
      <div class="col-8 m-0 p-0 border shadow">
     <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-inner">';
     // perulangan img slideshow
     $isFirstSlide = true;

     foreach ($slideshowGambar as $slideshow) {
      if ($slideshow->id_slideshow == $sectionSlideshowId->id) {
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
      </div>  
      <div class="col-2">
      </div>
      </div>
    </div>';
    }


    // section_petas 1 DATA
   } elseif ($section->jenis_section == 'peta') {
    $sectionPetaId = $sectionPeta[$section->id] ?? null;
    if ($sectionPetaId) {
     $sectionData[] = $col;
     $sectionData[] = $sectionPetaId->url_peta;
     $sectionData[] = $penutupDiv;
    }


    // section_gambars 1 DATA
   } elseif ($section->jenis_section == 'gambar full') {
    // $sectionGambar = Section_Gambar::where('id_section', $section->id)->where('jenis_section', 'gambar full')->first();
    // $sectionGambarId = Section_Gambar::where('id_section', $section->id)->first();

    // Mengambil data Section_Gambar menggunakan referensi langsung ke Urutan_Section
    $sectionGambarId = $sectionGambar[$section->id] ?? null;
    if ($sectionGambarId) {
     $sectionData[] = $col;
     $sectionData[] = '<img class="section-gambar-besar" src="/img/landing_page/' . $sectionGambarId->file_gambar . '" alt="' . $sectionGambarId->file_gambar . '">';
     $sectionData[] = $penutupDiv;
    }


    // section_tulisans 1 DATA
   } elseif ($section->jenis_section == 'tulisan dengan bg warna full') {
    $sectionTulisanId = $sectionTulisan[$section->id] ?? null;
    if ($sectionTulisanId) {
     $sectionData[] = $col;
     $sectionData[] = '<div class="bg-primary d-flex align-items-center text-center justify-content-center fs-2 py-5">' . $sectionTulisanId->tulisan . '</div>';
     $sectionData[] = $penutupDiv;
    }


    // section_gbrh_hdg_prgfs BANYAK DATTAAA
   } elseif ($section->jenis_section == 'gambar heading paragraf') {
    $sectionGHPId = $sectionGHP[$section->id] ?? null;
    if ($sectionGHPId) {
     $sectionData[] = '<div class="col-md-4 col-12 d-flex justify-content-center align-items-center  mb-5">
     <div class="row-12">';
     foreach ($gambarGHP as $gbrGHP) {
      // perulangan gambar ghp
      if ($gbrGHP->id_gbr_hdg_prgf == $sectionGHPId->id) {
       $sectionData[] = '     <div class="col-12">
       <img src="/img/landing_page/' . $gbrGHP->file_gambar . '" alt="gambarr" class="gambaratasbawah my-2 rounded-circle img-fluid">
      </div>';
      }
     }
     $sectionData[] = '   </div>
     </div>
     <div class="col-md-8 col-12 d-flex align-items-center mb-5">
     <div class="row-12">';

     // lanjut ke heading
     foreach ($headingGHP as $hdgGHP) {
      if ($hdgGHP->id_gbr_hdg_prgf == $sectionGHPId->id) {
       $sectionData[] = '<div class="col-12">
       <h1 class="text-center">' . $hdgGHP->nama_heading . '</h1>
      </div>';

       // lanjut ke paragraf dalam heading
       $sectionData[] = '<div class="col-12">';
       foreach ($paragrafHeadingGHP as $phdgGHP) {

        if ($phdgGHP->id_gbr_hdg_prgf_head == $hdgGHP->id) {
         $sectionData[] = '<p>' . $phdgGHP->text_paragraf . '</p>';
        }
       }
       $sectionData[] = '</div>';
      }
     }

     $sectionData[] = '
     </div>
    </div>';
    }
   }
  }
  return view('section', ['sectionData' => $sectionData]);
 }

 public function indexTabelSection()
 {
  $data = [
   'dataSection' => $this->urutanSection,
  ];
  return view('urutanSectionView', $data);
 }

 public function detailSection($id)
 {
  $data = [];
  $urutanSection = Urutan_Section::findOrFail($id);
  if ($urutanSection) {
   $data = [
    'deskripsi' => $urutanSection->deskripsi_section,
    'jenis' => $urutanSection->jenis_section,
    'urutan' => $urutanSection->urutan_section,
   ];
  }
  // dd($data);
  return view('detailSectionView', $data);
 }
}
