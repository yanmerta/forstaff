<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\LogoutController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\HomeController;
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


//Login Admin
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/admin', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login_proses'])->name('login.proses');

Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'],
    function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
// Route::get('/admin', [DashboardController::class, 'index'])->name('index');
Route::get('/logout', [LogoutController::class, 'process'])->name('logoutProcess');

 //Manajamen Data User
 Route::get('/admin/users', [adminController::class, 'index'])->name('admin.users');
 Route::get('admin-users/create', [adminController::class, 'create'])->name('admin.users.create');
 Route::post('admin-users', [adminController::class, 'store'])->name('admin.users.store');
 Route::get('/admin-users/{user}/edit', [adminController::class, 'edit'])->name('admin.users.edit');
 Route::put('/admin-users/{user}/update', [adminController::class, 'update'])->name('admin.users.update');
 Route::delete('/admin/users/{user}/delete', [adminController::class, 'destroy'])->name('admin.users.delete');

 //Update Perofile Admin
 Route::get('/profile', [ProfileController::class,'index',])->name('profile.index');
 Route::patch('/profile/{id}', [ProfileController::class,'update',])->name('profile.update');
 Route::delete('/admin/profile/{id}/delete-photo', [ProfileController::class, 'deletePhoto'])->name('profile.delete-photo');
});

