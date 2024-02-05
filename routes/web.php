<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\WelcomeController;

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


Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');


Route::middleware(['auth', 'role:user'])->group(function () {
  Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::middleware(['role:admin'])->group(function () {

  Route::get('/dashboard', [HomeController::class, 'admin'])->name('dashboard');
  Route::resource('gallery', GalleryController::class)
    ->except(['create', 'index']);
});

Route::middleware(['role:operator'])->group(function () {
  Route::get('/operator', [HomeController::class, 'operator'])->name('operator');
});


Route::post('/galleries/{gallery}/like', [LikeController::class, 'like'])->name('like');
Route::post('/galleries/{gallery}/unlike', [LikeController::class, 'unlike'])->name('unlike');

Auth::routes();
