<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\DeploymentController;
use App\Http\Controllers\DisconnectController;
use App\Http\Controllers\ExeSummController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PekerjaanLapanganController;
use App\Http\Controllers\ProgresLapanganController;
use App\Models\PekerjaanLapangan;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\WfmController;
use App\Models\Database;
use App\Models\ProgresLapangan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserManagementController;
use Maatwebsite\Excel\Row;

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
Route::get('/', [LoginController::class, 'TampilLogin'])->name('login');
Route::post('/postlogin', [LoginController::class, 'PostLogin'])->name('postlogin');

// Route Home
Route::get('/home', [RekapController::class, 'index'])->name('home');

// Route Database
Route::get('/database', [DatabaseController::class, 'index'])->name('database.index');
Route::post('/database/tambah', [DatabaseController::class, 'store'])->name('database.store');
Route::get('/database/edit/{database}', [DatabaseController::class, 'edit'])->name('database.edit');
Route::put('/database/update/', [DatabaseController::class, 'update'])->name('database.update');
Route::delete('/database/delete/{database}', [DatabaseController::class, 'destroy'])->name('database.destroy');

// Pekerjaan Lapangan Route
Route::get('/pekerjaan_lapangan', [PekerjaanLapanganController::class, 'index'])->name('pekerjaan_lapangan.index');
Route::get('/pekerjaan_lapangan/create', [PekerjaanLapanganController::class, 'create'])->name('pekerjaan_lapangan.create');
Route::post('/pekerjaan_lapangan/tambah', [PekerjaanLapanganController::class, 'store'])->name('pekerjaan_lapangan.store');
Route::get('/pekerjaan_lapangan/edit/{pekerjaan_lapangan}', [PekerjaanLapanganController::class, 'edit'])->name('pekerjaan_lapangan.edit');
Route::put('/pekerjaan_lapangan/update/{pekerjaan_lapangan}', [PekerjaanLapanganController::class, 'update'])->name('pekerjaan_lapangan.update');
Route::delete('/pekerjaan_lapangan/delete/{pekerjaan_lapangan}', [PekerjaanLapanganController::class, 'destroy'])->name('pekerjaan_lapangan.destroy');
Route::get('/export/pekerjaan_lapangan', [PekerjaanLapanganController::class, 'exportPekerjaanLapangan'])->name('pekerjaan_lapangan.export');
Route::post('/import/pekerjaan_lapangan', [PekerjaanLapanganController::class, 'importPekerjaanLapangan'])->name('pekerjaan_lapangan.import');


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
Route::post('/import/rekap', [RekapController::class, 'importRekap'])->name('rekap.import');

// progress lapangan
Route::get('/progress_lapangan', [ProgresLapanganController::class, 'index'])->name('progress.index');
Route::get('/progress_lapangan/create', [ProgresLapanganController::class, 'create'])->name('progress.create');
Route::post('/progress_lapangan/store', [ProgresLapanganController::class, 'store'])->name('progress.store');
Route::get('/progress_lapangan/edit/{progress}', [ProgresLapanganController::class, 'edit'])->name('progress.edit');
Route::put('/progress_lapangan/update/{progress}', [ProgresLapanganController::class, 'update'])->name('progress.update');
Route::delete('/progress_lapangan/update/{progress}', [ProgresLapanganController::class, 'destroy'])->name('progress.destroy');

// deployment
Route::get('/deployment', [DeploymentController::class, 'index'])->name('dep.index');
Route::get('/deployment/create', [DeploymentController::class, 'create'])->name('dep.create');
Route::post('/deployment/store', [DeploymentController::class, 'store'])->name('dep.store');
Route::get('/deployment/edit/{deployment}', [DeploymentController::class, 'edit'])->name('dep.edit');
Route::put('/deployment/update/{deployment}', [DeploymentController::class, 'update'])->name('dep.update');
Route::delete('/deployment/delete/{deployment}', [DeploymentController::class, 'destroy'])->name('dep.destroy');


// disconnect
Route::get('/disconnect', [DisconnectController::class, 'index'])->name('dis.index');
Route::get('/disconnect/edit/{diconnect}', [DisconnectController::class, 'edit'])->name('dis.edit');
Route::put('/disconnect/update/{diconnect}', [DisconnectController::class, 'update'])->name('dis.update');
Route::delete('/disconnect/delete/{diconnect}', [DisconnectController::class, 'destroy'])->name('dis.destroy');

//route EXE SUMM
Route::get('/exe_summ', [ExeSummController::class, 'index'])->name('xSumm.index');
Route::get('/exe_summ/edit/{exeSumm}', [ExeSummController::class, 'edit'])->name('xSumm.edit');
Route::put('/exe_summ/update/{exeSumm}', [ExeSummController::class, 'update'])->name('xSumm.update');
Route::delete('/exe_summ/delete/{exeSumm}', [ExeSummController::class, 'destroy'])->name('xSumm.destroy');

//route usermanagement
Route::get('user/management', [App\Http\Controllers\UserManagementController::class, 'index'])->name('');
