<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'NIM  : 2241720225
    <br> Nama : Bagus Arnovario Wibowo';
    }
    public function articles($articlesId)
    {
        return 'Halaman Artikel dengan ID ' . $articlesId;
    }
}