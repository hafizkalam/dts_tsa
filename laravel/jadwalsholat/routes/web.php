<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

Route::get('/', function () {
    $schedule = Http::get('https://api.banghasan.com/sholat/format/json/jadwal/kota/775/tanggal/' . date("Y-m-d"))->json()['jadwal']['data'];
    return view('welcome', compact('schedule'));
});
