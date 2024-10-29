<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;

Route::get('/',[ContestController::class, 'index']);

Route::get('/register', [UserController::class, 'create']);
Route::post('/register',[UserController::class, 'store']);

Route::get('/login',  [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout',[LoginController::class, 'destroy']);
Route::get('/contest/register',  [ContestController::class, 'create']);
Route::post('/contest/register', [ContestController::class, 'store']);
Route::get('/contest/{contest}', [ContestController::class, 'show'])->middleware('auth');
Route::post('/contest/{contest}',[ContestController::class, 'registerUser']);

Route::get('/profile/{user}',[UserController::class, 'show']);              //Profile

Route::get('/teams', [TeamController::class, 'index'])->middleware('auth');
Route::get('/teams/register', [TeamController::class, 'create'])->middleware('auth');
Route::post('/teams/register',[TeamController::class, 'store'])->middleware('auth');
Route::post('/teams',[TeamController::class, 'destroy'])->middleware('auth');
Route::post('/teams/register-user',[TeamController::class, 'registerUser'])->middleware('auth');

Route::get('/notifications', [NotificationController::class, 'index'])->middleware('auth');
Route::get('/invite', [NotificationController::class, 'create'])->middleware('auth');
Route::post('/invite',[NotificationController::class, 'store'])->middleware('auth');
Route::post('/notifications',[NotificationController::class, 'destroy'])->middleware('auth');