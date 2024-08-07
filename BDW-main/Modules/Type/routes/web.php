<?php

use Illuminate\Support\Facades\Route;
use Modules\Type\app\Http\Controllers\TypeController;

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

// Route::group([], function () {
//     Route::resource('type', TypeController::class)->names('type');
// });

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
  Route::get('type', [TypeController::class, 'index'])->name('type');
  Route::get('type/create', [TypeController::class, 'create'])->name('type.create');
  Route::post('type/save', [TypeController::class, 'store'])->name('type.save');
  Route::get('type/edit/{id}', [TypeController::class, 'edit'])->name('type.edit');
  Route::put('type/update/{id}', [TypeController::class, 'update'])->name('type.update');
  Route::delete('type/delete/{id}', [TypeController::class, 'destroy'])->name('type.destroy');
});