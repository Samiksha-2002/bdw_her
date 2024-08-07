<?php

use Illuminate\Support\Facades\Route;
use Modules\MindSet\app\Http\Controllers\MindSetController;

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
//     Route::resource('mindset', MindSetController::class)->names('mindset');
// });


Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('question/option', [MindSetController::class, 'index'])->name('question.option');
    Route::get('question/create', [MindSetController::class, 'create'])->name('question.create');
    Route::post('question/save', [MindSetController::class, 'store'])->name('question.save');
    Route::get('question/edit/{id}', [MindSetController::class, 'edit'])->name('question.edit');
    Route::put('question/update/{id}', [MindSetController::class, 'update'])->name('question.update');
    Route::delete('question/delete/{id}', [MindSetController::class, 'destroy'])->name('question.destroy');
    Route::get('question/status/change/{id}/{status}', [MindSetController::class, 'change_status'])->name('question.status.change');
});
