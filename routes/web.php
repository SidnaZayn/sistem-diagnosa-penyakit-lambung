<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\HasilAnalisaController;
use App\Http\Controllers\PasienController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('admin', AdminController::class, [
    'names' => [
        'index' => 'admin',
        // etc...
    ]
]);

Route::prefix('diagnosa')->group(function () {
    Route::get('/', [DiagnosaController::class, 'index'])->name('diagnosa.index');
    Route::post('/createpasien', [PasienController::class, 'createPasien'])->name('diagnosa.createPasien');
    Route::get('/keluhan',[GejalaController::class, 'index'])->name('diagnosa.keluhan');
    Route::post('/keluhan',[GejalaController::class, 'createGejala'])->middleware('auth:sanctum')->name('diagnosa.keluhan.create');
    Route::get('/analisa',[HasilAnalisaController::class, 'analisa'])->name('diagnosa.analisa');
    
});