<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'welcome')->name('home');
Route::view('whoAmI', 'me')->name('whoAmI');
Route::view('development', 'projects/development')->name('development');
Route::view('ml', 'projects/ml')->name('ml');
Route::view('cybersec', 'projects/cybersec')->name('cybersec');
Route::view('blog', 'blog/index')->name('blog');
Route::view('fun', 'myFun')->name('fun');

Route::view('addBlogPost', [UserController::class, 'blog/form'])->name('addBlogPost');
Route::get('createBlogPost', [UserController::class, 'create'])->name('create');
// Route::post('uploadBlogPost', [UserController::class, 'update'])

Route::middleware('admin')->group(function () {
    return 0;
    // Authenticate it's me logging in to the application
    // Route::get('addBlogPost', [UserController::class, 'create'])->name('addBlogPost');
});

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});
