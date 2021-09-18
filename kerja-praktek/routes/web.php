<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PekerjaanLapanganController;
use App\Models\PekerjaanLapangan;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\WfmController;
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

// Route Login
Route::get('/', [LoginController::class, 'TampilLogin']);

// Route Dashboard
Route::get('/dashboard', function () {
    return view(
        'dashboard',
        [
            "title" => "Dashboard"
        ]
    );
});

// Route Database
Route::get('/database', [DatabaseController::class, 'index'])->name('database.index');
Route::post('/database/tambah', [DatabaseController::class, 'store'])->name('database.store');
Route::get('/database/edit/{database}', [DatabaseController::class, 'edit'])->name('database.edit');
Route::put('/database/update/', [DatabaseController::class, 'update'])->name('database.update');
Route::delete('/database/delete/{database}', [DatabaseController::class, 'destroy'])->name('database.destroy');

// Pekerjaan Lapangan Route
Route::get('/pekerjaan_lapangan', [PekerjaanLapanganController::class, 'index'])->name('pekerjaan_lapangan.index');

// database
Route::get('/database', [DatabaseController::class, 'index'])->name('database.index');
Route::get('/database/create', [DatabaseController::class, 'create'])->name('database.create');
Route::post('/database/tambah', [DatabaseController::class, 'store'])->name('database.store');
Route::get('/database/edit/{database}', [DatabaseController::class, 'edit'])->name('database.edit');
Route::put('/database/update/{database}', [DatabaseController::class, 'update'])->name('database.update');
Route::delete('/database/delete/{database}', [DatabaseController::class, 'destroy'])->name('database.destroy');

Route::get('/export/database', [DatabaseController::class, 'databaseexport'])->name('database.export');
Route::post('/import/database', [DatabaseController::class, 'databaseimport'])->name('database.import');


// end of database

// WFM
Route::get('/wfm', [WfmController::class, 'index'])->name('wfm.index');
Route::get('/wfm/create', [WfmController::class, 'create'])->name('wfm.create');
Route::post('/wfm/store', [WfmController::class, 'store'])->name('wfm.store');
Route::get('/wfm/edit/{wfm}', [WfmController::class, 'edit'])->name('wfm.edit');
Route::put('/wfm/update/{wfm}', [WfmController::class, 'update'])->name('wfm.update');
Route::delete('/wfm/delete/{wfm}', [WfmController::class, 'destroy'])->name('wfm.delete');


Route::get('/export/wfm', [WfmController::class, 'exportWfm'])->name('wfm.export');
Route::post('/import/wfm', [WfmController::class, 'importWfm'])->name('wfm.import');

// end of wfm



// rekap

Route::get('/rekap', [RekapController::class, 'index'])->name('rekap.index');
Route::get('/rekap/create', [RekapController::class, 'create'])->name('rekap.create');
Route::post('/rekap/store', [RekapController::class, 'store'])->name('rekap.store');
Route::get('/rekap/edit/{rekap}', [RekapController::class, 'edit'])->name('rekap.edit');
Route::put('/rekap/update/{rekap}', [RekapController::class, 'update'])->name('rekap.update');

Route::delete('/rekap/delete/{rekap}', [RekapController::class, 'destroy'])->name('rekap.destroy');

Route::get('/export/rekap', [RekapController::class, 'exportRekap'])->name('rekap.export');
