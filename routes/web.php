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
//     return Redirect::to('/admin/dashboard');
// });

Route::get('/link-storage', function () {
    Artisan::call('storage:link'); // this will do the command line job
});

// Route::get('/dashboard','DashboardController@index')->name('dashboard');

Route::middleware(['cors'])->group(function () {
    Route::get('/', 'DashboardController@index')->name('public_dashboard');
    Route::get('/detail/{slug}', 'DashboardController@detail');
    Route::get('/kategori/{slug}', 'DashboardController@kategori');
    Route::get('/search', 'DashboardController@search');
    Route::get('/display-search/{value}', 'DashboardController@display_search');
    Route::get('/get-data-search/{value}', 'DashboardController@get_data_search');
});



