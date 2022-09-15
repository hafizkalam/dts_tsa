<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('articles/cetak_pdf', [ArticleController::class, 'cetak_pdf']);

Route::resource('articles', ArticleController::class);

Auth::routes();
Route::resource('mahasiswa', MahasiswaController::class);
Route::get('mahasiswa/nilai/cetak_pdf/{nim}', [MahasiswaController::class, 'cetak_nilai'])->name('mahasiswa.cetak_nilai');
Route::get('mahasiswa/nilai/{nim}', [MahasiswaController::class, 'nilai'])->name('mahasiswa.nilai');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
