<?php

use Illuminate\Support\Facades\Route;
use Modules\Category\app\Http\Controllers\CategoryController;

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
//     Route::resource('category', CategoryController::class)->names('category');
// });
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
  Route::get('category/index/{parent_id?}', [CategoryController::class, 'index'])->name('category');
  Route::get('category/{parent_id?}/create', [CategoryController::class, 'create'])->name('category.create');
  Route::post('category/save', [CategoryController::class, 'store'])->name('category.save');
  Route::get('category/{parent_id?}/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
  Route::put('category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
  Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
});