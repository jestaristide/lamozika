<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArtisteController;
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

Route::get('/', function () {
   return Inertia::render('TestPage');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::resource('lm-admin', AdminController::class, ['names' => [
    'index' => 'admin.index',
    'show' => 'admin.show',
]])->only(['index', 'show']);


Route::resource('lm-admin/artiste', ArtisteController::class, ['names' => [
    'index' => 'artiste.index',
    'show' => 'artiste.show',
    'edit' => 'artiste.edit',
    'create' => 'artiste.create',
]]);
