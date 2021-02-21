<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function value($val)
    {
        return 'Ini Halaman Berita<br><h1>' . ($val) . '</h1>' ;
    }
}
