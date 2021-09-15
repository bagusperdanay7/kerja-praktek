<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\LoginController;
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

Route::get('/dashboard', function () {
    return view(
        'dashboard',
        [
            "title" => "Dashboard"
        ]
    );
});

Route::get('login',[LoginController::class,'TampilLogin']);

Route::get('/database',[DatabaseController::class, 'index'])->name('database.index');
Route::post('/database/tambah',[DatabaseController::class, 'store'])->name('database.store');
Route::get('/database/edit/{database}',[DatabaseController::class, 'edit'])->name('database.edit');
Route::put('/database/update/',[DatabaseController::class, 'update'])->name('database.update');
Route::delete('/database/delete/{database}',[DatabaseController::class, 'destroy'])->name('database.destroy');
