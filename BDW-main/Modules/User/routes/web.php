<?php

use Illuminate\Support\Facades\Route;
use Modules\User\app\Http\Controllers\UserController;

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

//  Route::group([], function () {
//      Route::resource('user', UserController::class)->names('user');
//  });

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
  Route::get('admin/users', [UserController::class, 'index'])->name('users');
  Route::get('admin/user/create', [UserController::class, 'create'])->name('user.table');
  Route::post('admin/user/store', [UserController::class, 'store'])->name('user.store');
  Route::get('admin/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
  Route::post('admin/user/update/{id}', [UserController::class, 'store'])->name('user.update');
  Route::delete('admin/user/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');

  Route::post('admin/user/blocke/reason/{id}', [UserController::class, 'store_blocke'])->name('user.block');
  Route::get('admin/user/unblock/{id}', [UserController::class, 'un_blocke'])->name('user.unblock');
  Route::get('admin/user/detail/{id}', [UserController::class, 'show'])->name('user.show');
});

// Route::resource('users', UserController::class);
  