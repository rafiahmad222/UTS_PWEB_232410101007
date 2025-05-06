<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class, 'showLoginForm'])->name('login');
Route::post('/login',[PageController::class, 'login'])->name('login.post');
Route::get('/dashboard',[PageController::class, 'dashboard'])->name('dashboard');
Route::get('/profile',[PageController::class, 'profile'])->name('profile');
Route::get('/pengelolaan',[PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/logout',[PageController::class, 'logout'])->name('logout');
