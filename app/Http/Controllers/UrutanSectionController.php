<?php

namespace App\Http\Controllers;

use App\Models\Section_Gambar;
use App\Models\Urutan_Section;
use Illuminate\Http\Request;

class UrutanSectionController extends Controller
{
 public function index()
 {
  // Mengambil semua data dari tabel Urutan_Section
  // $urutanSection = Urutan_Section::all();
  $urutanSection = Urutan_Section::orderBy('urutan_section')->get();
  // Menyiapkan array untuk menyimpan hasil
  $sectionData = [];

  // Melakukan iterasi melalui setiap baris data
  foreach ($urutanSection as $section) {

   // section_slideshows
   if ($section->jenis_section === 'slide show') {
    $sectionData[] = '<h1>' . $section->deskripsi_section . '</h1>';


    // section_petas
   } elseif ($section->jenis_section === 'peta') {
    $sectionData[] = '<a href="#">' . $section->deskripsi_section . '</a>';


    // section_gambars
   } elseif ($section->jenis_section === 'gambar full') {
    // $sectionGambar = Section_Gambar::where('id_section', $section->id)->where('jenis_section', 'gambar full')->first();
    $sectionGambar = Section_Gambar::where('id_section', $section->id)->first();
    if ($sectionGambar) {
     $sectionData[] = '<img src="' . $sectionGambar->file_gambar . '" alt="' . $sectionGambar->file_gambar . '">';
    }


    // section_tulisans
   } elseif ($section->jenis_section === 'tulisan dengan bg warna full') {
    $sectionData[] = '<button>' . $section->deskripsi_section . '</button>';


    // section_gbrh_hdg_prgfs
   } elseif ($section->jenis_section === 'gambar heading paragraf') {
    $sectionData[] = '<p>' . $section->deskripsi_section . '</p>';
   }


   // garis
   $sectionData[] = '<hr>';
  }


  // Mengirimkan data ke view 'section' untuk ditampilkan
  return view('section', ['sectionData' => $sectionData]);
 }
}
