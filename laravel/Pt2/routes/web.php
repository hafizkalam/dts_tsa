<?php

// use App\Http\Controllers\home3Controller;
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\NewsController;
// use App\Http\Controllers\ProgramController;
// use App\Http\Controllers\AboutUsController;
// use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;

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

/* PRAKTIKUM 1 */

// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "NIM : 1941720101 <br>Nama : Hafiz Kalam Abdillah";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman artikel dengan ID $id";
// });

/* PRAKTIKUM 2 SESI 1*/

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

/* PRAKTIKUM 2 SESI 2*/

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

/* PRAKTIKUM 3 */

// Route::get('/home', [home3Controller::class, 'index']);
// Route::prefix('category')->group(function () {
//     Route::get('/{id}', [ProductController::class, 'product']);
// });
// Route::get('/news/{id?}', [NewsController::class, 'news']);
// Route::prefix('program')->group(function () {
//     Route::get('/{id}', [ProgramController::class, 'program']);
// });
// Route::get('/AboutUs', [AboutUsController::class, 'about']);
// Route::resource('contact', ContactController::class);
