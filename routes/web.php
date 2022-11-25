<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Todo\TodoController;

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



Route::middleware(['auth','verified'])->group(function () {
    Route::get('/dashboard', [TodoController::class,'index'])->name('dashboard');
    Route::delete('/destroy{id}', [TodoController::class,'destroy'])->name('schedule.destroy');
    Route::post('/store', [TodoController::class,'store'])->name('schedule.store');
    Route::get('/post', [TodoController::class,'post'])->name('post');
    Route::get('/post/{id}', [TodoController::class,'edit'])->name('schedule.edit');
    Route::put('/update/{id}', [TodoController::class,'update'])->name('schedule.update');
    Route::get('week', [TodoController::class,'week'])->name('week');
    Route::get('month', [TodoController::class,'month'])->name('month');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
