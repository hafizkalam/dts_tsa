<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        return "Nama : Hafiz Kalam Abdillah <br>NIM : 1941720101";
    }

    public function articles($id)
    {
        return "Halaman Artikel dengan ID = $id";
    }
}
