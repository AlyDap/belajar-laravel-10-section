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
    Route::get('', [UrutanSectionController::class, 'index'])->name('bebas');
});
Route::prefix('/urutansection')->group(function () {
    Route::get('', [UrutanSectionController::class, 'indexTabelSection'])->name('bebaaas');
    // LANJUTTT
    Route::get('detail/{id}', [UrutanSectionController::class, 'detailSection'])->name('hahhah');
    Route::get('updateUrutan/{id}', [UrutanSectionController::class, 'detailSection'])->name('hahhah');
    // Route::get('add/{id}', [UrutanSectionController::class, 'detailSection'])->name('hahhah');
    // Route::get('store/{id}', [UrutanSectionController::class, 'detailSection'])->name('hahhah');
    // Route::get('edit/{id}', [UrutanSectionController::class, 'detailSection'])->name('hahhah');
    // Route::get('update/{id}', [UrutanSectionController::class, 'detailSection'])->name('hahhah');
    // Route::get('delete/{id}', [UrutanSectionController::class, 'detailSection'])->name('hahhah');
});
