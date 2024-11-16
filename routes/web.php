<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

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

Route::get('/', function () {
    return view('login');
});
use App\Http\Controllers\PaslonController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HasilPaslonController;
use App\Http\Controllers\HasilAnggotaController;

Route::post('/vote', [HasilPaslonController::class, 'vote'])->name('vote');
Route::post('/voteag', [HasilAnggotaController::class, 'vote'])->name('voteag');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/pemilihan-ketos', [LoginController::class, 'pemilihanKetos'])->middleware('auth');

Route::get('/pemilihan-ketos', [PaslonController::class, 'index']);

Route::get('/pemilihan-anggota', [AnggotaController::class, 'index']);

