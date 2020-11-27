<?php

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


// homepage
Route::namespace('Home')->group(function(){
    Route::get('/', 'HomepageController');
    Route::resource('berita', 'BeritaController');
});


Route::get('/login', function(){
    return view('cms.auth.login');
});

Route::group([
    'namespace' => 'Cms',
    'prefix'    => 'cms',
    'as'        => 'cms.'
], function(){
    Route::get('/', 'DashboardController');
    
    // delete route using sweetalert
    // Route::get('kategori-berita/delete/{id}', 'KategoriBeritaController@destroy');
    Route::resource('kategori-berita', 'KategoriBeritaController');
    Route::resource('berita', 'BeritaController');
    Route::resource('halaman', 'HalamanController');
});

// laravel file manager demo
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

// Auth::routes([
//     'verify' => true
// ]);

// Route::get('/home', 'HomeController@index')->name('home');
