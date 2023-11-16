<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\MovieController;
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
// */

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::prefix('/admin')->group(function () {
    Route::get('/', [DashBoardController::class, 'index']);
    Route::get('/dashboard', [DashBoardController::class, 'index']);

    // Filmes
    Route::prefix('/filmes')->controller(MovieController::class)->group(function () {
        Route::get('/', 'index')->name('movies.index');
        Route::post('/', 'store')->name('movies.store');
        Route::get('/create', 'create')->name('movies.create');
        Route::get('/{movie}', 'show')->name('movies.show');
        Route::match(['put', 'patch'], '/{movie}', 'update')->name('movies.update');
        Route::delete('/{movie}', 'destroy')->name('movies.destroy');
        Route::get('/{movie}/edit', 'edit')->name('movies.edit');
    });

    // Categoria
    Route::prefix('/categorias')->controller(CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('categories.index');
        Route::post('/', 'store')->name('categories.store');
        Route::get('/create', 'create')->name('categories.create');
        Route::match(['put', 'patch'], '/{category}', 'update')->name('categories.update');
        Route::delete('/{category}', 'destroy')->name('categories.destroy');
        Route::get('/{category}/edit', 'edit')->name('categories.edit');
    });

    // Diretor

    Route::prefix('/diretores')->controller(DirectorController::class)->group(function () {
        Route::get('/', 'index')->name('directors.index');
        Route::post('/', 'store')->name('directors.store');
        Route::get('/create', 'create')->name('directors.create');
        Route::match(['put', 'patch'], '/{director}', 'update')->name('directors.update');
        Route::delete('/{director}', 'destroy')->name('directors.destroy');
        Route::get('/{director}/edit', 'edit')->name('directors.edit');
    });
});
