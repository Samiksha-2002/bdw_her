<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Modules\MindSet\app\Http\Controllers\Api\MindSetController;

/*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
*/

Route::get('mindset-questions', [MindSetController::class, 'index']);
Route::middleware(['auth:sanctum'])->group(function () {
//     Route::get('mindset', fn (Request $request) => $request->user())->name('mindset');
    Route::post('mindset-questions/answer', [MindSetController::class, 'store']);
    Route::get('midset-questions/answer/get', [MindSetController::class, 'index_mindset_question_optionAnswer']);
});
