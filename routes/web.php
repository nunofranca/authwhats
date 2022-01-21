<?php

use App\Http\Controllers\Painel\DashboardController;

use App\Http\Controllers\Painel\ServersController;
use App\Http\Controllers\Painel\TitlesController;
use App\Http\Controllers\Painel\UsersController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::middleware(['auth', 'config.mkauth'])->prefix('painel')->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('clientes')->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('users.index');
        Route::get('/{login}', [UsersController::class, 'show'])->name('users.show');
    });

    Route::prefix('titulos')->group(function () {
        Route::get('/', [TitlesController::class, 'index'])->name('titles.index');
        Route::get('/vencidos', [TitlesController::class, 'losers'])->name('titles.losers');
    });

    Route::prefix('servers')->group(function () {
        Route::get('/create', [ServersController::class, 'create'])->name('servers.create')->withoutMiddleware('config.mkauth');
        Route::post('/create', [ServersController::class, 'store'])->name('servers.post')->withoutMiddleware('config.mkauth');
    });

    Route::prefix('whats')->group(function () {
//        Route::post('/sendMessage/{whatsappNumber}');
    });


});
