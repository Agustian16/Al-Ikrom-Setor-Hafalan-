<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KepsekController as KC;
use App\Http\Controllers\PemrayController as PC;
use App\Http\Controllers\adminController as AC;
use App\Http\Controllers\HafalanController as HC;
use App\Http\Controllers\tasmiController as TC;


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


// ? End of Welcome Route

// !Login Route
// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// !End of Login Route


// ^ Admin Route

Route::prefix('admin/')->group(function() {
    Route::get('/',[AC::class, 'index'])->name('admin.index');
    Route::get('/santri',[AC::class, 'santri'])->name('admin.santri');
});



// ^ End of Admin Route



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


// ~Hafalan Route
Route::prefix('hafalan')->group(function() {
    Route::get('/',[HC::class,'index'])->name('hafalans.index');
         });

// ~End of Hafafan Route


// & Route Tasmi
Route::prefix('tasmi')->group(function() {
    Route::get('/',[TC::class,'index'])->name('tasmi.index');
         });

// & End of Route Tasmi
