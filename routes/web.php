<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\HasilAnalisaController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PenyakitSolusiAdminController;
use App\Http\Controllers\PenyakitSolusiController;
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
Route::resource('penyakit_solusi_admin', PenyakitSolusiAdminController::class);

Route::get('/test', [HasilAnalisaController::class, 'test']);

Route::prefix('diagnosa')->group(function () {
    Route::get('/', [DiagnosaController::class, 'index'])->name('diagnosa.index');
    Route::post('/createpasien', [PasienController::class, 'createPasien'])->name('diagnosa.createPasien');
    Route::get('/keluhan', [GejalaController::class, 'index'])->name('diagnosa.keluhan');
    Route::post('/keluhan', [GejalaController::class, 'createGejala'])->middleware('auth:sanctum')->name('diagnosa.keluhan.create');
    Route::get('/analisa', [HasilAnalisaController::class, 'analisa'])->name('diagnosa.analisa');
    Route::get('/view-hasil-analisa', [HasilAnalisaController::class, 'viewHasilAnalisa'])->name('diagnosa.viewHasilAnalisa');
});

Route::prefix('penyakit_solusi')->group(function () {
    Route::get('/', [PenyakitSolusiController::class, 'index'])->name('penyakit_solusi.index');
});

Route::prefix('history')->group(function () {
    Route::get('/', [HasilAnalisaController::class, 'getHistoryByPasienId'])->name('history.index');
});

Route::get('/about', function () {
    return view('main.about.index');
})->name('about.index');