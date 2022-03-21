<?php

use App\Http\Controllers\FilmController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'film'], function() {
    Route::get('/', [FilmController::class, 'landingPage'])->name('landing-page');

    Route::get('/login', [FilmController::class, 'loginPage'])->name('login-page');
    Route::get('/dashboard', [FilmController::class, 'dashboardPage'])->name('dashboard-page');

    Route::get('/crud-page', [FilmController::class, 'crudPage'])->name('crud-page');
    Route::get('/{id}/read-film', [FilmController::class, 'readFilm'])->name('read-film');

    Route::get('/create-film', [FilmController::class, 'createFilm'])->name('create-film');
    Route::post('/save-create-film', [FilmController::class, 'saveCreateFilm'])->name('save-create-film');

    Route::get('/{id}/update-film', [FilmController::class, 'updateFilm'])->name('update-film');
    Route::post('/{id}/save-update-film', [FilmController::class, 'saveUpdateFilm'])->name('save-update-film');

    Route::post('/{id}/delete-film', [FilmController::class, 'deleteFilm'])->name('delete-film');
    
}); 
