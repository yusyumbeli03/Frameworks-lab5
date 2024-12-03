<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::resource('tasks', App\Http\Controllers\TaskController::class);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'storeRegister'])->name('storeRegister');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'storeLogin'])->name('storeLogin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

//Route::get('/dashboard/{user?}', [DashboardController::class, 'index'])
//    ->middleware('auth')
//    ->name('dashboard');
 //Просмотр всех кабинетов (только для администратора)
Route::get('/admin/dashboards', [DashboardController::class, 'adminIndex'])
    ->middleware('auth')
    ->name('admin.dashboards');

//// Просмотр личного кабинета
//Route::get('/dashboard/{user}', [DashboardController::class, 'show'])
//    ->middleware('auth')
//    ->name('dashboard');

// Просмотр личного кабинета
//Route::get('/dashboard', [DashboardController::class, 'show'])
//    ->middleware('auth')
//    ->name('dashboard');

