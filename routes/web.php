<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function(){

    //user profile routes
    Route::group(['prefix' => 'profile'], function(){
        Route::get('/index/{id}', [\App\Http\Controllers\User\ProfileController::class, 'index']) ->name('profile.index');
        Route::get('/edit/{id}', [\App\Http\Controllers\User\ProfileController::class, 'edit']) ->name('profile.edit');
        Route::post('/update/{id}', [\App\Http\Controllers\User\ProfileController::class, 'update']) ->name('profile.update');
    });
});
