<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\ArticleController;

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


Auth::routes();

Route::get('/', [HomeController::class, 'showHome'])->name('welcome');

Route::controller(GameController::class)->prefix('jeux')->group(function () {
    Route::get('/{slug}', 'showGame')->name('show-game');
});

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::controller(DashboardController::class)->group(function() {
        Route::get('/', 'showDashboard')->name('show-dashboard-admin');
    });


    Route::prefix('modules')->group(function() {
        Route::prefix('words')->controller(WordController::class)->group(function() {

            Route::get('/', 'showWords')->name('show-modules-words');
            Route::post('/edit-word', 'editWords')->name('edit-modules-words');

        });
    });

});




Route::controller(BlogController::class)->prefix('actualites')->group(function () {
    Route::get('/', 'showBlog')->name('show-blog');
    // Route::get('/{slug}', 'showArticle')->name('show-article');
    Route::get('/article', 'showArticle')->name('show-article');
});

Route::post('/add-email-newsletter', [NewsletterController::class, 'AddEmailNewsletter'])->name('add-email-newsletter');

Route::get('/a-propos', [AboutController::class, 'showAbout'])->name('show-about');



Route::get('/contact', [ContactController::class, 'showContact'])->name('show-contact');
Route::post('/send-mail', [ContactController::class, 'sendMail'])->name('send-mail');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
