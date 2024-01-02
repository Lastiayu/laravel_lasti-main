<?php
// use App\Http\Controllers\Controller;
use App\Http\Controllers\OtherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;



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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('/other', 'OtherController');
Route::get('/other/detail/{id}', [OtherController::class, 'detail'])->name('other.detail');

// Route::get('/sponsor', [SponsorController::class, 'index']);
// Route::get('/sponsor', [SponsorController::class, 'create']);

// Route::resource('user', UserController::class);
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');


Route::get('/tasks/{task}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::post('/tasks/{task}/complete', [TaskController::class, 'complete'])->name('tasks.complete');
Route::get('/taskshow', [TaskController::class, 'showCompleted'])->name('tasks.taskshow');
// Route::get('/tasks/show/{id}', 'TaskController@show')->name('tasks.taskshow');


// chart sponsor
Route::get('/chart-sponsor', [SponsorController::class, 'getData'])->name('sponsor.getData');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/sponsor', 'SponsorController');
Route::get('/sponsor/detail/{id}', [SponsorController::class, 'detail'])->name('sponsor.detail');

Route::get('/sponsor', 'SponsorController@index')->name('sponsor.index');


Route::get('full-calender', [FullCalenderController::class, 'index'])->name('full-calender');
Route::post('full-calender/action', [FullCalenderController::class, 'action'])->name('full-calender.action');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

Route::prefix('template')->group(function () {
    Route::get('admin', function () {
        return view('template/admin');
    })->name('admin')->middleware('admin');
});

Route::prefix('template')->group(function () {
    Route::get('user', function () {
        return view('template/user');
    })->name('user')->middleware('user');
});

Route::resource('/user', 'UserController');

Route::get('/user', 'UserController@index')->name('user.index');

