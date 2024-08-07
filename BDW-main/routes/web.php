<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthController;

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

// Route::get('/php artisan {artisan}', function ($artisan) {
// 	\Artisan::call($artisan);
// 	return \Artisan::output();
// });


Route::get('/', [AuthController::class, 'index_login'])->name('login');

Route::group(['prefix'=>'auth', 'as'=>'auth.'], function () { 
	// login routes
	Route::post('login/post', [AuthController::class, 'login'])->name('login.post');
	//logout
	Route::get('logout', [AuthController::class, 'logout'])->name('logout');	
	// signup route
	Route::get('signup', [AuthController::class, 'index_signup'])->name('signup');
	Route::post('signup/post', [AuthController::class, 'signup'])->name('signup.post');

	
	// reset password 
	Route::get('reset/password', [AuthController::class, 'index_reset_password'])->name('reset.password');
	Route::post('reset/password', [AuthController::class, 'reset_password'])->name('reset.password.post');
	Route::get('password/reset/{token}', 'Auth\AuthController@showResetForm')->name('password.reset');
	Route::post('password/reset', 'Auth\AuthController@reset')->name('password.update');

	// reset password mail confirmation
	Route::get('reset/confirmation', [AuthController::class, 'index_reset_password_confirmation'])->name('reset.password_confirmation');
	Route::post('reset/confirmation', [AuthController::class, 'reset_password_confirmation'])->name('reset.password_confirmation.post');
});

Route::get('admin/dashboard', [DashboardController::class , 'index'])->name('admin.dashboard');
Route::get('admin/video',[DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('admin/categories/index', [DashboardController::class, 'index'])->name('admin.dashboard');
//Route::get('admin/products', [DashboardController::class], 'index')->name('admin.dashboard');
