<?php

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

Route::get('/',[GuestController::class, 'index'])->name('home');
Route::get('/in',[GuestController::class,'show_in'])->name('register');
Route::post('/register', [GuestController::class, 'store'])->name('store');
Route::delete('/out/{id}', [GuestController::class, 'destroy'])->name('destroy');

Route::get('/out', [GuestController::class, 'show_out'])->name('out');
