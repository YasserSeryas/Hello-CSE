<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\starController;
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

Route::get('/',
[starController::class,'home'])->name('home');

// Gestion 
Route::get('/StarList',
[starController::class,'index'])->middleware(['auth'])->name('stars.index');

Route::get('/Star/{id}',
[starController::class,'open'])->name('star');

// Route Admin (Ajout, modification et suppression)
Route::get('/stars/create',
[starController::class,'create'])->middleware(['auth'])->name('stars.create');

Route::post('/stars/store',
[starController::class,'store'])->middleware(['auth'])->name('stars.store');

Route::get('/stars/{id}/edit',
[starController::class,'edit'])->middleware(['auth'])->name('stars.edit');

Route::put('/stars/{id}/update',
[starController::class,'update'])->middleware(['auth'])->name('stars.update');


Route::get('star/{id}/delete',
[starController::class,'delete'])->middleware(['auth'])->name('stars.delete');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
