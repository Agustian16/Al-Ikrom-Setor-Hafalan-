<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\KepsekController as KC;
use App\Http\Controllers\PemrayController as PC;
=======
use App\Http\Controllers\HafalanController;

>>>>>>> setor-hafalan
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

// ? Welcome Route
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
<<<<<<< HEAD
// ? End of Welcome Route


// ^ Headmaster Route
Route::prefix('kepsek/')->group(function() {
    Route::get('/',[KC::class, 'index'])->name('kepsek.index');
});

// ^ End of Headmaster Route

// * Rayon Supervisor Route 
Route::prefix('pemray')->group(function() {
    Route::get('/',[PC::class,'index'])->name('pemray.index');
         });

// * End of Rayon Supervisor Route 
=======
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> login
=======
Route::resource('hafalans',HafalanController::class);
>>>>>>> setor-hafalan
