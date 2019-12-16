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
    return view('auth/login');
});
Auth::routes();
Route::resource('users', 'UserController');
Route::resource('profile', 'ProfileController');
Route::resource('produk', 'ProdukController');
Route::resource('keranjang', 'keranjangController');
Route::resource('keranjang_dokter', 'Keranjang_dokterController');
Route::resource('pesanan', 'pesananController');
Route::resource('artikel', 'artikelController');
Route::resource('artikelUser', 'artikelUserController');
Route::get('/artikel', 'artikelController@index');
Route::get('/artikelUser', 'artikelUserController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produk', 'ProdukController@index');
Route::get('/produkUser', 'ProdukUserController@index');
Route::get('/delete/{id}', 'ProdukController@delete');
Route::get('/hapus/{id}', 'artikelController@delete');
Route::get('/remove/{id}', 'pesananController@delete');
Route::get('/carts/{id}', 'keranjangController@delete');
Route::post('/simpan','keranjangController@simpan');
// Route::post('/simpan1','keranjangController@simpan');
Route::get('home', 'PenyakitController@home');
Route::post('gejala1', 'PenyakitController@step');
Route::post('gejala2', 'PenyakitController@step2');
Route::post('penyakit', 'PenyakitController@step3');



// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });
