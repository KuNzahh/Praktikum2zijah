<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AutentikasiController;
use App\Http\Controllers\PostController;

Route::get('/',[HomeController::class, 'welcome'])->name('main');

//AutentikasiController
Route::get('/login',[AutentikasiController::class, 'login'])->name('login');
Route::post('/login',[AutentikasiController::class, 'loginstore'])->name('loginstore');
Route::get('/register',[AutentikasiController::class, 'register'])->name('register');
Route::post('/register',[AutentikasiController::class, 'registerstore'])->name('registerstore');
Route::post('/logout',[AutentikasiController::class, 'logout'])->name('logout');

Route::get('/home/{angka1}/{angka2}', [HomeController::class, 'index']);

//profil
Route::get('/profil', [UserController::class, 'profil'])->name('profil');
Route::get('/profil/{id}', [UserController::class, 'profilEdit'])->name('profilEdit');
Route::put('/profil/{id}', [UserController::class, 'profilUpdate'])->name('profilUpdate');
//profil

Route::get('/post', [PostController::class, 'post'])->name('post');
Route::post('/post', [PostController::class, 'store'])->name('postStore');
Route::delete('/post{id}', [PostController::class, 'delete'])->name('postDelete');