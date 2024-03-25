<?php

use App\Http\Controllers\UrutanSectionController;
use App\Models\Urutan_Section;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/')->group(function () {
    // contoh tampilan landing pages
    Route::get('', [UrutanSectionController::class, 'index'])->name('/');
});
Route::prefix('/urutansection')->group(function () {
    // index tabel section
    Route::get('', [UrutanSectionController::class, 'indexTabelSection'])->name('urutansection.index');
    Route::get('backup', [UrutanSectionController::class, 'backup'])->name('urutansection.backup');
    Route::get('backupSection', [UrutanSectionController::class, 'backupSection'])->name('urutansection.backupSection');
    // Detail urutan Section
    Route::get('detail/{id}', [UrutanSectionController::class, 'detailSection'])->name('urutansection.detail');
    // update urutan section naik turun
    Route::post('naik/{id}', [UrutanSectionController::class, 'naik'])->name('urutansection.naik');
    Route::post('turun/{id}', [UrutanSectionController::class, 'turun'])->name('urutansection.turun');
    Route::post('status/{id}', [UrutanSectionController::class, 'status'])->name('urutansection.status');
    Route::post('delete/{id}', [UrutanSectionController::class, 'delete'])->name('urutansection.delete');
    // update status section 
});
// Route::get('updateUrutan/{id}', [UrutanSectionController::class, 'detailSection'])->name('hahhah');
// Route::get('add/{id}', [UrutanSectionController::class, 'detailSection'])->name('hahhah');
// Route::get('store/{id}', [UrutanSectionController::class, 'detailSection'])->name('hahhah');
// Route::get('edit/{id}', [UrutanSectionController::class, 'detailSection'])->name('hahhah');
// Route::get('update/{id}', [UrutanSectionController::class, 'detailSection'])->name('hahhah');
// Route::get('delete/{id}', [UrutanSectionController::class, 'detailSection'])->name('hahhah');
