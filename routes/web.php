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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',
[starController::class,'index'])->name('star.index');

Route::get('/stars/create',
[starController::class,'create'])->name('star.create');

Route::post('/stars/store',
[starController::class,'store'])->name('star.store');

Route::get('/stars/{id}/edit',
[starController::class,'edit'])->name('star.edit');

Route::get('star/{id}/delete',
[starController::class,'delete'])->name('star.delete');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
