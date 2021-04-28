<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/delete/{id}', [HomeController::class, 'delete'])->name('weed.delete');
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('weed.edit');
Route::post('/update/{id}', [HomeController::class, 'update'])->name('weed.update');
Route::get('/create', [HomeController::class, 'create'])->name('weed.create');
Route::post('/store', [HomeController::class, 'store'])->name('weed.store');

Auth::routes();
