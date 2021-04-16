<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Category;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     echo "Selamat Datang";
// });

// Route::get('/about', function () {
//     echo "NIM   : 1941720186<br>";
//     echo "NAMA  : Hisyam Haryo Mahdyan<br>";
//     echo "KELAS : TI-2A<br>";
// });

// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID " . $id;
// });

// //PRAKTIKUM 2
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about-us', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);


// //PRAKTIKUM 3
// Route::get('/', [HomeController::class, 'index']);

// Route::group(['prefix' => 'category'], function () {
//     Route::get('/marbel-edu-games', [Category::class, 'products']);
// });

// Route::get('/news/{val}', [NewsController::class, 'value']);

// Route::group(['prefix' => 'program'], function () {
//     Route::get('/karir', [ProgramController::class, 'karir']);
// });

// Route::get('/about-us', [AboutController::class, 'about']);

// //PRAKTIKUM 4
// Route::get('/index', [WebController::class, 'index']);
// Route::get('/about', [WebController::class, 'about']);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/articles', ArticleController::class);
Route::post('/articles/{id}/edit', 'ArticleController@store')->name('Articles.store');