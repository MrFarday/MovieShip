<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/films', [HomeController::class, 'films'])->name('films');
Route::get('/film/{film}', [HomeController::class, 'show'])->name('film.show');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/films', [DashboardController::class, 'films'])->name('dashboard.films');
    Route::get('/dashboard/film/create', [DashboardController::class, 'create'])->name('dashboard.film.create');
    Route::get('/dashboard/film/{id}', [DashboardController::class, 'show'])->name('dashboard.film.show');
    Route::post('/dashboard/films', [DashboardController::class, 'store'])->name('dashboard.film.store');
    Route::get('/dashboard/film/edit/{id}', [DashboardController::class, 'edit'])->name('dashboard.film.edit');
    Route::patch('/dashboard/film/{film}', [DashboardController::class, 'update'])->name('dashboard.film.update');
    Route::delete('/dashboard/film/{film}', [DashboardController::class, 'destroy'])->name('dashboard.film.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
