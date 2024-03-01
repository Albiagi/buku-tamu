<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

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
//route guest controller
Route::get('/',[GuestController::class, 'index'])->name('home');
Route::get('/in',[GuestController::class,'show_in'])->name('register');
Route::post('/register', [GuestController::class, 'store'])->name('store');
Route::delete('/out/{id}', [GuestController::class, 'destroy'])->name('destroy');
Route::get('/out', [GuestController::class, 'show_out'])->name('out');
//route for auth
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/register', [AdminController::class, 'register'])->name('register');
Route::post('/proses_login', [AdminController::class, 'proses_login'])->name('proses_login');
Route::post('/proses_register', [AdminController::class, 'proses_register'])->name('proses_register');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
//midleware
//untuk membatasi agar tidak bisa di akses sebelu login
Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['check_login:admin']], function(){
        Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard');
    });
});
