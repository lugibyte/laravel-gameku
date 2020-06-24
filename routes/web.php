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

Route::get('saya', function () {
    return 'Halo, Apa Kabar?';
});

Route::get('siswa', 'SiswaController@index');

Route::redirect('mahasiswa', 'siswa');

Route::get('nama-siswa/{aku?}', 'SiswaController@detail')->name('profile');

Route::prefix('admin')->group(function () {
    Route::get('satu', function () {
        return 'satu';
    });

    Route::get('dua', function () {
        return 'dua';
    });
});

// Route::fallback(function () {
//     return 'halaman Tidak Ditemukan';
// });

Route::middleware('throttle:2,1')->group(function () {
    Route::get('/terbatas', function () {
        return 'terbatas';
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::post('products', 'ProductController@storex')->name('storexx');
Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/{product}/view', 'ProductController@view')->name('products.view');
Route::put('products/{product}', 'ProductController@update')->name('products.update');
Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy');

Route::get('users', 'UserController@index')->name('user.index');
Route::get('users/{userx}/view', 'UserController@view')->name('users.view');

Route::get('/products/cari','ProductController@cari');

Route::get('orderlist', 'OrderlistCController@index')->name('orderlist.index');

Route::post('', 'BeliController@storex')->name('storexxx');

Route::get('freefire', 'FreefireController@index')->name('freefire.index');
Route::get('freefire/create', 'FreefireController@create')->name('freefire.create');
Route::post('freefire', 'FreefireController@ffcreatex')->name('ffcreate');
Route::get('freefire/{ff}/edit', 'FreefireController@edit')->name('freefire.edit');
Route::put('freefire/{ff}', 'FreefireController@update')->name('freefire.update');
Route::delete('freefire/{ff}', 'FreefireController@destroy')->name('freefire.destroy');
Route::get('freefire/topup', 'TopupController@topupff')->name('freefire.topup');

Route::get('mlbb', 'MlbbController@index')->name('mlbb.index');
Route::get('mlbb/create', 'MlbbController@create')->name('mlbb.create');
Route::post('mlbb', 'MlbbController@mlbbcreatex')->name('mlbbcreate');
Route::get('mlbb/{ml}/edit', 'MlbbController@edit')->name('mlbb.edit');
Route::put('mlbb/{ml}', 'MlbbController@update')->name('mlbb.update');
Route::delete('mlbb/{ml}', 'MlbbController@destroy')->name('mlbb.destroy');
Route::get('mlbb/topup', 'TopupController@topupmlbb')->name('mlbb.topup');

Route::get('pubgm', 'PubgmController@index')->name('pubgm.index');
Route::get('pubgm/create', 'PubgmController@create')->name('pubgm.create');
Route::post('pubgm', 'PubgmController@pubgmcreatex')->name('pubgmcreate');
Route::get('pubgm/{pg}/edit', 'PubgmController@edit')->name('pubgm.edit');
Route::put('pubgm/{pg}', 'PubgmController@update')->name('pubgm.update');
Route::delete('pubgm/{pg}', 'PubgmController@destroy')->name('pubgm.destroy');
Route::get('pubgm/topup', 'TopupController@topuppubgm')->name('pubgm.topup');

Route::get('codm', 'CodmController@index')->name('codm.index');
Route::get('codm/create', 'CodmController@create')->name('codm.create');
Route::post('codm', 'CodmController@codmcreatex')->name('cdcreate');
Route::get('codm/{cd}/edit', 'CodmController@edit')->name('codm.edit');
Route::put('codm/{cd}', 'CodmController@update')->name('codm.update');
Route::delete('codm/{cd}', 'CodmController@destroy')->name('codm.destroy');
Route::get('codm/topup', 'TopupController@topupcodm')->name('codm.topup');

Route::get('/', 'TopupController@welcome')->name('game.welcome');
Route::get('/game', 'GameController@index')->name('game.index');
Route::get('game/create', 'GameController@create')->name('game.create');
Route::post('game', 'GameController@createx')->name('gamecreate');
Route::get('game/{gm}/edit', 'GameController@edit')->name('game.edit');
Route::put('game/{gm}', 'GameController@update')->name('gameupdate');
Route::delete('game/{gm}', 'GameController@destroy')->name('game.destroy');
