<?php
use App\Http\Controllers\SponsorController;

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
    return view('template/user');
});
Route::resource('/sponsor', 'SponsorController');
Route::get('/sponsor/detail/{id}', [SponsorController::class, 'detail'])->name('sponsor.detail');

Route::get('/chart', 'ChartController@showChart')->name('chart.index');


Route::get('/sponsor', 'SponsorController@index')->name('sponsor.index');
