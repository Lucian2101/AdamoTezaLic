<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DiamondController;

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

Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');
Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');

Route::get('/',[MainController::class, 'index'])->name('index');

Route::group(['middleware'=>['AuthCheck']], function(){

    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/auth/register',[MainController::class, 'register'])->name('auth.register');
    Route::get('/admin/dashboard',[MainController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/settings',[MainController::class,'settings'])->name('settings');
    Route::get('/admin/profile',[MainController::class,'profile'])->name('profile');
    Route::get('/admin/diamond',[MainController::class,'diamond'])->name('diamond');
    Route::get('/admin/delete/{id}',[MainController::class,'delete'])->name('delete');
    Route::get('/admin/edit/{id}',[MainController::class,'showData'])->name('showData');
    Route::post('/admin/edit',[MainController::class,'update'])->name('update');
});
