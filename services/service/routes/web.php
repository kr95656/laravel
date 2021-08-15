<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupController;
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

// Route::redirect('/top', 'groups.top');
Route::redirect('/', 'dashboard');

Route::middleware(['auth:sanctum'])->group( function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('groups', GroupController::class, ['except' => ['index']]);
});
