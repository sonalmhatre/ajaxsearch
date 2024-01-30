<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [MainController::class, 'index'])->name('pujavidhi.index');
Route::get('/search', [MainController::class, 'search'])->name('pujavidhi.search');
Route::get('categorywisevidhi/{id}', [MainController::class, 'categoryvidhi'])->name('categorywisepujavidhi');