<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleCOntroller extends Controller
{
    public function index($articlesId)
    {
        return 'Halaman Artikel dengan Id ' . $articlesId;
    }
}