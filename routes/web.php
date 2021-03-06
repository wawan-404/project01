<?php

use App\Http\Controllers\KategorifileController;
use Illuminate\Contracts\Cache\Store;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/pkategori', 'KategorifileController@index')->name('kategori.list');
Route::get('/ptambahkategori', 'KategorifileController@create')->name('kategori.create');
Route::post('/ptambahkategori', 'KategorifileController@Store');


Route::get('/profil', 'profilController@index')->name('profil');

// Route::get('/listarsip', function () {
//     return view('listarsip');
// });

// Route::get('/kategorifile', 'KategorifileController@index');
// Route::get('/tambahkategorifile', 'KategorifileController@create');
// Route::get('/storekategorifile', 'KategorifileController@store');
