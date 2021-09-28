<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Controllers\LinkedinController;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\EmailVerificationController;

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
Route::get('blog', [BlogController::class, 'index'])->name('blog');
// Route::get('blog', [LinkedinController::class, 'index'])->name('blog');
Route::view('fun', 'myFun')->name('fun');

Route::view('addBlogPost', [BlogController::class, 'blog/form'])->name('addBlogPost');
//Route::get('createBlogPost', [BlogController::class, 'create'])->name('create');
Route::post('uploadBlogPost', [BlogController::class, 'create']);
Route::get('editBlogPost/{blogpost}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('updateBlogPost', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/{blogpost}', [BlogController::class, 'destroy'])->name('blog.delete');

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
