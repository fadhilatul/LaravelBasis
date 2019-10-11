<?php

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
    return view('welcome');
});

// Route::get('/kelasku/{id}', function($id) {
//     retubluebluern 'kelas ' .$id;
// });

// Route::get('/umurku/{berapa?}', function($berapa) {
//     return '17 ' .$berapa;
// });

// Route::get('/home', function (){
//     return view('home');
// });

// Route::get('/user', function() {
//     return redirect('home');
// });

Route::get('/Barang', 'BarangController@index');

Route::get('/Users', 'UsersController@index');

Route::get('/Kategori', 'KategoriController@index');

Route::get('/Satuan', 'SatuanController@index');
