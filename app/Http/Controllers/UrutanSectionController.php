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
    // ambil data section yang aktif dan urutkan berdasar posisi
    $urutanSection = Urutan_Section::where('status', 'active')->orderBy('urutan_section')->get();

    //id_section = foreign key
    $sectionGambar = Section_Gambar::all()->keyBy('id_section');
    $sectionPeta = Section_Peta::all()->keyBy('id_section');
    $sectionTulisan = Section_Tulisan::all()->keyBy('id_section');
    $sectionSlideshow = Section_Slideshow::all();
    $sectionGHP = Section_Gbr_Hdg_Prgf::all()->keyBy('id_section');
    $gambarGHP = Gbr_Hdg_Prgf_Gambar::all();
    $headingGHP = Gbr_Hdg_Prgf_Heading::all();
    $paragrafHeadingGHP = Gbr_Hdg_Prgf_Heading_Paragraf::all();
    // cek data section dulluuu
    if (!$urutanSection->isEmpty()) {
      // Menyiapkan array untuk menyimpan hasil
      $sectionData = [];
      $col = '<div class="col-12 mb-5 p-0">';
      $penutupDiv = '</div>';
      // Melakukan iterasi melalui setiap baris data
      foreach ($urutanSection as $section) {
        // section_slideshows DATA PERULANGAN
        if ($section->jenis_section == 'slide show') {
          // $sectionData[] = $col;
          $sectionData[] = $col . '<div class="row"><div class="col-2"></div>
        <div class="col-8 m-0 p-0 border shadow">
       <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner">';
          // perulangan img slideshow
          $isFirstSlide = true;
          foreach ($sectionSlideshow as $slideshow) {
            if ($slideshow->id_section == $section->id) {
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
    </div><div class="col-2"></div></div>';


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
    } else {
      $sectionData[] = '<p class="text-center">Data tidak ditemukan</p>';
    }
    return view('sections.section', ['sectionData' => $sectionData]);
  }

  public function indexTabelSection()
  {
    $data = [
      'dataSection' => $this->urutanSection,
    ];
    return view('sections.urutanSectionView', $data);
  }

  public function detailSection($id)
  {
    $data = [];
    $urutanSection = Urutan_Section::findOrFail($id);
    if ($urutanSection) {
      $data = [
        'dataSection' => $urutanSection,
      ];
      // SLIDESHOW tampilan detail sudah
      if ($urutanSection->jenis_section == 'slide show') {
        $data['detailSection'] = [];
        $sectionSlideshow = Section_Slideshow::all();
        foreach ($sectionSlideshow as $slideshow) {
          if ($slideshow->id_section == $urutanSection->id) {
            $data['detailSection'][] = $slideshow;
          }
        }
        // PETA tampilan sudah
      } elseif ($urutanSection->jenis_section == 'peta') {
        $sectionPeta = Section_Peta::where('id_section', $urutanSection->id)->first();
        if ($sectionPeta->id_section == $urutanSection->id) {
          $data['detailSection'] = $sectionPeta->url_peta;
        }
        // GAMBAR FULL tampilan sudah
      } elseif ($urutanSection->jenis_section == 'gambar full') {
        $sectionGambar = Section_Gambar::where('id_section', $urutanSection->id)->first();
        if ($sectionGambar->id_section == $urutanSection->id) {
          $data['detailSection'] = $sectionGambar->file_gambar;
        }
        // TEXT DENGAN BG WARNA FULL tampilan sudah
      } elseif ($urutanSection->jenis_section == 'tulisan dengan bg warna full') {
        $sectionTulisan = Section_Tulisan::where('id_section', $urutanSection->id)->first();
        if ($sectionTulisan->id_section == $urutanSection->id) {
          $data['detailSection'] = $sectionTulisan;
        }
        // GAMBAR HEADING PARAGRAF
      } elseif ($urutanSection->jenis_section == 'gambar heading paragraf') {
        $sectionGHP = Section_Gbr_Hdg_Prgf::where('id_section', $urutanSection->id)->first();
        if ($sectionGHP->id_section == $urutanSection->id) {
          $gambarGHP = Gbr_Hdg_Prgf_Gambar::all();
          $headingGHP = Gbr_Hdg_Prgf_Heading::all();
          // ambil array gambar
          foreach ($gambarGHP as $gbrGHP) {
            if ($gbrGHP->id_gbr_hdg_prgf == $sectionGHP->id) {
              $data['detailSection'][] = $gbrGHP;
            }
          }
          // ambil array heading
          foreach ($headingGHP as $headGHP) {
            if ($headGHP->id_gbr_hdg_prgf == $sectionGHP->id) {
              $data['detailSectionH'][] = $headGHP;
              $paragrafHeadingGHP = Gbr_Hdg_Prgf_Heading_Paragraf::all();
              // ambil array paragraf
              foreach ($paragrafHeadingGHP as $prgfHeadGHP) {
                if ($prgfHeadGHP->id_gbr_hdg_prgf_head == $headGHP->id) {
                  $data['detailSectionP'][] = $prgfHeadGHP;
                }
              }
            }
          }
        }
      }
    }
    // dd($data['detailSection']);
    return view('sections.detailSectionView', $data);
  }

  public function naik($id)
  {
    $section = Urutan_Section::findOrFail($id);
    $currentOrder = intval($section->urutan_section);

    // Jika data yang dipilih adalah data pertama, maka tidak ada yang bisa diatasnya
    if ($currentOrder == 1) {
      // return response()->json(['message' => 'Data sudah berada di urutan paling atas']);
      return redirect()->back()->with('warning', 'Posisi sudah berada di urutan paling atas');
    }

    // Menemukan data dengan urutan sebelumnya
    $previousSection = Urutan_Section::where('urutan_section', $currentOrder - 1)->first();

    // jadikan 0 dulu
    $section->update(['urutan_section' => "0"]);
    // ubah atasnya ke bawah
    $previousSection->update(['urutan_section' => $currentOrder]);
    // baru ubah yang mau naik
    $section->update(['urutan_section' => $currentOrder - 1]);

    // return response()->json(['message' => 'Urutan data berhasil diperbarui']);
    return redirect()->back()->with('success', 'Posisi berhasil diubah');
  }

  public function turun($id)
  {
    $section = Urutan_Section::findOrFail($id);
    $currentOrder = $section->urutan_section;

    // Menemukan jumlah total data
    $totalSections = Urutan_Section::count();

    // Jika data yang dipilih adalah data terakhir, maka tidak ada yang bisa dibawahnya
    if ($currentOrder == $totalSections) {
      // return response()->json(['message' => 'Data sudah berada di urutan paling bawah']);
      return redirect()->back()->with('warning', 'Posisi sudah berada di urutan paling bawah');
    }

    // Menemukan data dengan urutan setelahnya
    $nextSection = Urutan_Section::where('urutan_section', $currentOrder + 1)->first();

    // Menukar urutan antara data yang dipilih dan data setelahnya
    $section->update(['urutan_section' => "0"]);
    $nextSection->update(['urutan_section' => $currentOrder]);
    $section->update(['urutan_section' => $currentOrder + 1]);

    // return response()->json(['message' => 'Urutan data berhasil diperbarui']);
    return redirect()->back()->with('success', 'Posisi berhasil diubah');
  }
  public function status(Request $request, $id)
  {
    // dd($id);
    $section = Urutan_Section::findOrFail($id);
    $status = $request->input('status');
    $section->update(['status' => $status]);
    return redirect()->back()->with('success', 'Status berhasil diubah.');
  }
  public function delete($id)
  {
    // dd($id);
    $section = Urutan_Section::findOrFail($id);

    $deletedOrder = intval($section->urutan_section);
    // $totalSections = Urutan_Section::count();
    // dd($section);

    // coba hapus data yang ada direlasi section
    if ($section->jenis_section == 'slide show') {
      $sectionDetail = Section_Slideshow::where('id_section', $id)->get();
      dd($sectionDetail);
    } elseif ($section->jenis_section == 'peta') {
      $sectionDetail = Section_Peta::where('id_section', $id)->first();
      if ($sectionDetail) {
        // dd('berhasil nangkap id');
        $hapusPeta = $sectionDetail->delete();
        if ($hapusPeta) {
          dd('berhasil hapus');
          return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
          dd('gagal hapus');
          return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
      } else {
        dd('gagal nangkap id');
        return redirect()->back()->with('error', 'Data tidak ditemukan.');
      }
      dd($sectionDetail);
    } elseif ($section->jenis_section == 'gambar full') {
      $sectionDetail = Section_Gambar::where('id_section', $id)->first();
      dd($sectionDetail);
    } elseif ($section->jenis_section == 'tulisan dengan bg warna full') {
      $sectionDetail = Section_Tulisan::where('id_section', $id)->first();
      dd($sectionDetail);
    } elseif ($section->jenis_section == 'gambar heading paragraf') {
      $sectionDetail = Section_Gbr_Hdg_Prgf::where('id_section', $id)->first();
      dd($sectionDetail);
    }

    // $section->delete();
    // jika sudah berhasil delete data tabel relasi


    // Dapatkan daftar section dengan urutan lebih besar dari urutan section yang dihapus
    $sectionsToUpdate = Urutan_Section::where('urutan_section', '>', $deletedOrder)->orderBy('urutan_section')->get();
    // cek apakah urutannya terakhir
    if ($sectionsToUpdate->isNotEmpty()) {
      // Kurangi satu dari urutan setiap section dalam daftar tersebut
      foreach ($sectionsToUpdate as $gantiUrutan) {
        $gantiUrutan->urutan_section = $gantiUrutan->urutan_section - 1;
        // UNCOMMMENT INI KALAU MAU NAIKIN URUTAN SECTION SETELAH HAPUS
        // $gantiUrutan->save();
      }
      // dd($cek);
    } else {
      dd('urutan terakhir jadi tidak edit urutan yang lain');
    }




    return redirect()->back()->with('success', 'Status berhasil diubah.');
  }
}
