<?php

use App\Http\Controllers\Admin\ComicController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/comic', [PageController::class, 'comic'])->name('comic');
Route::get('/comic/admin', [PageController::class, 'comic'])->name('comic');

Route::resource('admin/comics', ComicController::class);
