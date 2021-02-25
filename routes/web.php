<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostTagController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/articles/{slug}', [ArticlesController::class, 'index'])->name('articles');

Route::get('/tags/{slug}', [PostTagController::class, 'index'])->name('tags');

Route::get('/details/{slug}', [DetailsController::class, 'index'])->name('details');

Route::get('/about', [FooterController::class, 'index'])->name('about');

Route::get('/toc', [FooterController::class, 'toc'])->name('toc');

Route::get('/policy', [FooterController::class, 'policy'])->name('policy');

Route::get('/kontak', [FooterController::class, 'kontak'])->name('kontak');

Auth::routes(['verify' => true]);

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    Alert::success('Email success verified');
    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    Alert::info('Email has been sended again');
    return back();
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::resource('dashboard', DashboardController::class)->names([
        'index' => 'dashboard'
    ]);

    Route::resource('category', CategoryController::class)->names([
        'index' => 'category.index',
    ]);

    Route::resource('tag', TagController::class)->names([
        'index' => 'tag.index',
    ]);

    Route::resource('post', PostController::class)->names([
        'index' => 'posts.index',
        'edit' => 'post.edit',
        'store' => 'posts.store',
        'update' => 'post.update',
    ]);
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout');