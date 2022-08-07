<?php

use App\Http\Controllers\Bank\IndexController;
use App\Http\Controllers\Bank\ShowController;
use App\Http\Controllers\Bank\StoreController;
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

Route::get('/banks', IndexController::class)->name('banks.banks');
Route::post('/banks', StoreController::class)->name('banks.store');

Route::get('/banks/{bank}/comments', \App\Http\Controllers\Comment\IndexController::class)->name('banks.comments.show');
Route::post('/banks/{bank}/comments', \App\Http\Controllers\Comment\StoreController::class)->name('banks.comments.store');


