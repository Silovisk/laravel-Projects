<?php

use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\SorteadorController;
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

Route::prefix('admin')->group(function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('admin.index');
    Route::get('admin', [DashBoardController::class, 'index'])->name('admin.index');
    Route::get('/sorteador', [SorteadorController::class, 'index'])->name('sorteador.index');
});
