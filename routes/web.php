<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArtisteController;
use App\Http\Controllers\Admin\MusiqueController;
use App\Http\Controllers\Admin\UploadController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

/*Route::resource('administration/artiste', ArtisteController::class, ['names' => [
    'index' => 'artiste.index',
    'show' => 'artiste.show',
    'edit' => 'artiste.edit',
    'create' => 'artiste.create',
]]);*/

/*Route::resource('administration/musique', MusiqueController::class, ['names' => [
    'index' => 'musique.index',
    'show' => 'musique.show',
    'edit' => 'musique.edit',
    'create' => 'musique.create',
]]);*/

Route::prefix('administration')->group(function () {

    Route::resource('musique',MusiqueController::class);
    Route::resource('artiste', ArtisteController::class);
    Route::resource('/', AdminController::class, ['names' => [
        'index' => 'admin.index',
        'show' => 'admin.show',
    ]])->only(['index', 'show']);

});
