<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KepsekController as KC;
use App\Http\Controllers\PemrayController as PC;
use App\Http\Controllers\adminController as AC;
use App\Http\Controllers\TasmiController as TC;
use App\Http\Controllers\surahController as SC;
use App\Http\Controllers\HafalanController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\MurobiController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\MapelController;



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

Route::prefix('/admin')->group(function() {
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
Route::resource('hafalans',HafalanController::class);

// ~End of Hafafan Route

// ? Surah Route
Route::prefix('surah-quran')->group(function() {
    Route::get('/',[SC::class,'index'])->name('admin.surah');
         });
// ?End of Surah Route


// Santri Route
Route::get('/santri', [SantriController::class,'index']);
Route::post('/santri/create', [SantriController::class, 'create']);
Route::get('/santri/{nis}/edit', [SantriController::class, 'edit']);
Route::post('/santri/{nis}/update', [SantriController::class, 'update']);
Route::get('/santri/{nis}/delete', [SantriController::class, 'delete']);

// End of Santri Route


// murobi Route
Route::get('/murobi', [MurobiController::class,'index']);
Route::post('/murobi/create', [MurobiController::class, 'create']);
Route::get('/murobi/{nis}/edit', [MurobiController::class, 'edit']);
Route::post('/murobi/{nis}/update', [MurobiController::class, 'update']);
Route::get('/murobi/{nis}/delete', [MurobiController::class, 'delete']);

// End of murobi Route

// rayon Route 
Route::get('/rayon', [RayonController::class,'index']);
Route::post('/rayon/create', [RayonController::class, 'create']);
Route::get('/rayon/{nis}/edit', [RayonController::class, 'edit']);
Route::post('/rayon/{nis}/update', [RayonController::class, 'update']);
Route::get('/rayon/{nis}/delete', [RayonController::class, 'delete']);

// End of rayon Route

// mapel Route 
Route::get('/mapel', [MapelController::class,'index']);
Route::post('/mapel/create', [MapelController::class, 'create']);
Route::get('/mapel/{nis}/edit', [MapelController::class, 'edit']);
Route::post('/mapel/{nis}/update', [MapelController::class, 'update']);
Route::get('/mapel/{nis}/delete', [MapelController::class, 'delete']);

// End of mapel Route

// & Tasmi Route
Route::prefix('tasmi')->group(function() {
    Route::get('/',[TC::class,'index'])->name('tasmi.index');
         });
// & End of Tasmi Route