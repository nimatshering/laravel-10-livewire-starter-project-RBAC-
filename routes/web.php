<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Front-end Route
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\FrontpageController;

/*
|--------------------------------------------------------------------------
| Admin User Route
|--------------------------------------------------------------------------
| Admin
*/
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Livewire\Admin\Addresses;
use App\Http\Livewire\Admin\Usefullinks;
use App\Http\Livewire\Admin\Users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [FrontpageController::class, 'index'])->name('landing');

/*---------------------------------------------------------------------------------------
| Group route for admin panel 
|----------------------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware('auth', 'web', 'role:admin')->name('admin.')->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'admin'])->name('dashboard');

  Route::get('/users', Users::class)->name('users');
  Route::get('/address', Addresses::class)->name('address');
  Route::get('/useful-links', Usefullinks::class)->name('usefullinks');
});






