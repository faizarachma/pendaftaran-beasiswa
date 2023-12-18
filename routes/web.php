<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pendaftaranController;
use App\Http\Controllers\formpendaftaranController;
use App\Http\Controllers\hasilController;
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

Route::get('/infopendaftaran',[pendaftaranController::class, 'infoPendaftaran'])->name('infopendaftaran');
Route::get('/formpendaftaran',[formpendaftaranController::class, 'index'])->name('viewformpendaftaran');
Route::post('/submitformpendaftaran',[formpendaftaranController::class, 'store'])->name('submitformpendaftaran');
Route::get('/hasil',[hasilController::class, 'hasil'])->name('hasil');