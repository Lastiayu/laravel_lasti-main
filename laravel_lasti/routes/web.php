<?php

use App\Http\Controllers\SponsorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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
    return view('template/master');
});

// Route::get('/sponsor', function () {
//     return view('sponsor/index');
// });

// Route::get('/sponsor', [SponsorController::class, 'index']);
// Route::get('/sponsor', [SponsorController::class, 'create']);
Route::resource('/sponsor', 'SponsorController');
Route::get('/sponsor/detail/{id}', [SponsorController::class, 'detail'])->name('sponsor.detail');
// Route::resource('user', UserController::class);
Route::get('/tasks', [TaskController::class,'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class,'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class,'store'])->name('tasks.store');


Route::get('/tasks/{task}', [TaskController::class,'edit'])->name('tasks.edit');
Route::put('/tasks{task}', [TaskController::class,'update'])->name('tasks.update');
Route::delete('/tasks{task}', [TaskController::class,'destroy'])->name('tasks.destroy');
Route::post('/tasks{task}/complete', [TaskController::class,'complete'])->name('tasks.complete');
Route::get('/taskshow', [TaskController::class,'showCompleted'])->name('taskhow');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
