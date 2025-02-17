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

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\LoginController@index')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::get('/logout','Auth\LoginController@logout');
    
    
    Route::middleware(['cors','cek_login'])->group(function () {
        Route::get('/', function () {
            return Redirect::to('/admin/dashboard');
        });
        Route::get('/dashboard','Admin\DashboardController@index')->name('dashboard');

        Route::prefix('master')->group(function () {
            Route::prefix('kategori')->group(function () {
                Route::get('/','Admin\KategoriController@index');
                Route::get('/detail/{id}','Admin\KategoriController@detail');
                Route::get('/datatables','Admin\KategoriController@datatables');
                Route::post('/store-update','Admin\KategoriController@store_update');
                Route::delete('/delete/{id}','Admin\KategoriController@delete');
            });
            
            Route::prefix('berita')->group(function () {
                Route::get('/','Admin\BeritaController@index');
                Route::get('/add','Admin\BeritaController@add');
                Route::get('/detail/{id}','Admin\BeritaController@detail');
                Route::get('/change-status/{id}/{status}','Admin\BeritaController@change_status');
                Route::post('/check-image', 'Admin\BeritaController@check_image');
                Route::get('/datatables','Admin\BeritaController@datatables');
                Route::post('/store-update','Admin\BeritaController@store_update');
                Route::delete('/delete/{id}','Admin\BeritaController@delete');
            });
        });

        Route::prefix('laporan')->group(function () {
            Route::prefix('trending')->group(function () {
                Route::get('/','Admin\TrendingController@index');
                Route::get('/datatables','Admin\TrendingController@datatables');
            });
        });
        
    });

});




