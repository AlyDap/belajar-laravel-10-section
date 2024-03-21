<?php

namespace App\Http\Controllers;

use App\Models\Section_Gambar;
use App\Models\Section_Gbr_Hdg_Prgf;
use App\Models\Section_Peta;
use App\Models\Section_Slideshow;
use App\Models\Section_Tulisan;
use App\Models\Urutan_Section;
use Illuminate\Http\Request;

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
  $sectionGHP = Section_Gbr_Hdg_Prgf::all()->keyBy('id_section');
  // Menyiapkan array untuk menyimpan hasil
  $sectionData = [];
  $col = '<div class="col-12 m-0 p-0">';
  $penutupDiv = '</div>';

  // Melakukan iterasi melalui setiap baris data
  foreach ($urutanSection as $section) {

   // section_slideshows
   if ($section->jenis_section === 'slide show') {
    $sectionData[] = $col;
    $sectionData[] = '<h1>' . $section->deskripsi_section . '</h1>';
    $sectionData[] = $penutupDiv;


    // section_petas
   } elseif ($section->jenis_section === 'peta') {
    $sectionPetaId = $sectionPeta[$section->id] ?? null;
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
