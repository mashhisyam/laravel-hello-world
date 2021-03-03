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
        return 'NAMA : Hisyam Haryo Mahdyaan <br>NIM : 1941720186';
    }
    public function articles($id)
    {
        return 'Halaman Artikel dengan Id '.($id);
    }
}
