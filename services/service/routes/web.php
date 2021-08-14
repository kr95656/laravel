<?php

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


Route::middleware(['auth:sanctum'])->group(function () {

    // ホーム画面
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    // グループ詳細画面
    Route::get('/groups/{id}', function() {
        return 'groups show';
    })->whereNumber('id');

    // グループ作成画面
    Route::get('/groups/create', function() {
        return 'groups create';
    });

    // グループ作成
    Route::post('/groups', function() {
        return redirect('dashboard');
    });

    // グループ編集画面
    Route::get('/groups/{id}/edit', function () {
        return 'groups edit';
    })->whereNumber('id');

    // グループ編集
    Route::put('/groups/{id}', function() {
        return redirect('dashboard');
    });

    // グループ削除
    Route::delete('/groups/{id}', function() {
        return redirect('dashboard');
    });
});
