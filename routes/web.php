<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SearchController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('blog');
});

Route::get('about', [HomeController::class, 'about'])->name('about');

Route::get('contact', [HomeController::class, 'contact'])->name('contact');

Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'create']);


    Route::middleware('auth')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::post('upload', [UploadController::class, 'store']);

        Route::get('search', [SearchController::class, 'search'])->name('search');

        Route::prefix('slider')->name('slider.')->controller(SliderController::class)->group(function () {
            Route::get('/', 'index')->name('index');

            Route::get('create', 'create')->name('create');
            Route::post('create', 'store');

            Route::get('edit/{slider}', 'edit')->name('edit');
            Route::post('edit/{slider}', 'update');

            Route::delete('destroy', 'destroy')->name('destroy');
        });

        Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {
            Route::get('/', 'index')->name('index');

            Route::get('create', 'create')->name('create');
            Route::post('create', 'store');

            Route::get('edit/{category}', 'edit')->name('edit');
            Route::post('edit/{category}', 'update');

            Route::delete('destroy', 'destroy')->name('destroy');
        });

        Route::prefix('post')->name('post.')->controller(PostController::class)->group(function () {
            Route::get('/', 'index')->name('index');

            Route::get('create', 'create')->name('create');
            Route::post('create', 'store');

            Route::get('edit/{post}', 'edit')->name('edit');
            Route::post('edit/{post}', 'update');

            Route::delete('destroy', 'destroy')->name('destroy');
        });

        Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
            Route::get('/', 'index')->name('index');

            Route::get('create', 'create')->name('create');
            Route::post('create', 'store');

            Route::get('edit/{user}', 'edit')->name('edit');
            Route::post('edit/{user}', 'update');

            Route::delete('destroy', 'destroy')->name('destroy');
        });
    });
});
