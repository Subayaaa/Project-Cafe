<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloCtrl;

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

Route::get('/about', [HelloCtrl::class, 'about']);

Route::get('/input', [HelloCtrl::class, 'input']);

Route::post('/save', [HelloCtrl::class, 'simpan']);

Route::get('/tes', [HelloCtrl::class, 'test']);

Route::get('/makanan', [HelloCtrl::class, 'view_makanan']);
