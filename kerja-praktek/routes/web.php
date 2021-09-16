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

Route::get('/', [LoginController::class, 'TampilLogin']);

Route::get('/dashboard', function () {
    return view(
        'dashboard',
        [
            "title" => "Dashboard"
        ]
    );
});
<<<<<<< HEAD
=======

Route::get('login',[LoginController::class,'TampilLogin']);

Route::get('/database',[DatabaseController::class, 'index'])->name('database.index');
Route::post('/database/tambah',[DatabaseController::class, 'store'])->name('database.store');
Route::get('/database/edit/{database}',[DatabaseController::class, 'edit'])->name('database.edit');
Route::put('/database/update/',[DatabaseController::class, 'update'])->name('database.update');
Route::delete('/database/delete/{database}',[DatabaseController::class, 'destroy'])->name('database.destroy');
>>>>>>> c6b26394938ed51f3d6457448ebd199f34e4f01d
