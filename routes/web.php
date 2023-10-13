<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Auth;
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
    return view('home_new');
});
Route::get('/', [App\Http\Controllers\HomeNewController::class, 'index'])->name('index');
Route::get('/artikel-detail/{id}', [App\Http\Controllers\HomeNewController::class, 'show'])->name('article.detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/article', ArticlesController::class);
    Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');

});



