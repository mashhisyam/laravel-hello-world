<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    echo "Selamat Datang";
});

// Route::get('/about', function () {
//     echo "NIM   : 1941720186<br>";
//     echo "NAMA  : Hisyam Haryo Mahdyan<br>";
//     echo "KELAS : TI-2A<br>";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID ".$id;
// });


Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}',[ArticleController::class,'articles']);