<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Videos\app\Http\Controllers\Api\VideosController;

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

// Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {
//     Route::get('videos', fn (Request $request) => $request->user())->name('videos');
// });
Route::get('admin/video', [VideosController::class, 'index']);