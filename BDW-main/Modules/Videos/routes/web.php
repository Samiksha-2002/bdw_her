<?php

use Illuminate\Support\Facades\Route;
use Modules\Videos\app\Http\Controllers\VideosController;

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
//     Route::resource('videos', VideosController::class)->names('videos');
// });

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
  Route::get('video', [VideosController::class, 'index'])->name('video');
  Route::get('video/create', [VideosController::class, 'create'])->name('video.create');
  Route::post('video/save', [VideosController::class, 'store'])->name('video.save');
  Route::get('video/edit/{id}', [VideosController::class, 'edit'])->name('video.edit');
  Route::put('video/update/{id}', [VideosController::class, 'update'])->name('video.update');
  Route::delete('video/delete/{id}', [VideosController::class, 'destroy'])->name('video.destroy');

  Route::get('action/name', [VideosController::class, 'Categories']);
  Route::get('sub/category', [VideosController::class, 'sub_categories']);
});