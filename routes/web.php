<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloCtrl;
use App\Http\Controllers\MenuCtrl;
use App\Http\Controllers\KategoriCtrl;

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

Route::get('/', [HelloCtrl::class, 'index']);

Route::get('/menu', [MenuCtrl::class, 'index']);

Route::get('/kategori', [KategoriCtrl::class, 'index']);
