<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    Route::get('register', [RegisterController::class, 'index']);
    Route::post('register', [RegisterController::class, 'create']);


    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::post('upload', [UploadController::class, 'store']);

        Route::prefix('slider')->group(function () {
            Route::get('/', [SliderController::class, 'index'])->name('slider.index');

            Route::get('create', [SliderController::class, 'create']);
            Route::post('create', [SliderController::class, 'store']);

            Route::get('{id}/edit', [SliderController::class, 'edit']);
            Route::put('{id}', [SliderController::class, 'update']);
            Route::delete('{id}', [SliderController::class, 'destroy']);
        });
    });
});
