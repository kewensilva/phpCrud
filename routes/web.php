<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\GamesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('games')->group(function () {
    Route::get('/index', [GamesController::class, 'index'])->name('games.index');
    Route::post('/register', [GamesController::class, 'store'])->name('games.store');
});

Route::prefix('categories')->group(function () {

    Route::post('/register', [CategoriesController::class, 'store'])->name('categories.store');

    Route::get('/index', [CategoriesController::class, 'index'])->name('categories.index');

    Route::put('/update/{id}', [CategoriesController::class, 'update'])->name('categories.update');

    Route::delete('/delete/{id}', [CategoriesController::class, 'delete'])->name('categories.delete');
});