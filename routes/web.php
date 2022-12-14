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
use App\Http\Controllers\MentionsController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AdminController;


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

// ADMIN
Route::prefix('admin')->middleware('auth')->group(function () {


    Route::controller(DashboardController::class)->group(function() {
        Route::get('/', 'showDashboard')->name('show-dashboard-admin');
    });

    // ARTICLES
    Route::prefix('articles')->controller(BlogController::class)->group(function() {
        Route::get('/create', 'showCreate')->name('show-create-article');
        Route::get('/edit/{slug}', 'showEdit')->name('show-edit-article');
        Route::get('/all', 'showAll')->name('show-all-articles');

        Route::post('/create', 'postEditCreateArticle')->name('post-edit-create-article');

        Route::delete('/delete/{id}', 'deleteArticle')->name('delete-article');

        Route::post('/fav/{action}/{id}', 'editArticleFav')->name('edit-article-fav');

    });

    
    // GAMES 
    Route::prefix('games')->controller(GameController::class)->group(function() {
        Route::get('/create', 'showCreate')->name('show-create-game');
        Route::get('/edit/{slug}', 'showEdit')->name('show-edit-game');
        Route::get('/all', 'showAll')->name('show-all-games');

        Route::post('/create', 'postEditCreateGame')->name('post-edit-create-game');
        Route::delete('/delete/{id}', 'deleteGame')->name('delete-game');

        Route::delete('/delete/screen/{id}', 'deleteScreen')->name('delete-screen');
    });

    Route::prefix('modules')->group(function() {
        
        // WORDS
        Route::prefix('words')->controller(WordController::class)->group(function() {
            Route::get('/', 'showWords')->name('show-modules-words');
            Route::post('/edit-word', 'editWords')->name('edit-modules-words');
        });
    });

    //List Admins 
  
    
        Route::get('/show-admins', [AdminController::class, 'showAdmins'])->name('show-admins');
        Route::delete('delete/{id}', [AdminController::class, 'deleteAdmin'])->name('delete-admin');

});




Route::controller(BlogController::class)->prefix('actualites')->group(function () {
    Route::get('/', 'showBlog')->name('show-blog');
    Route::get('{slug}', 'showArticle')->name('show-article');
});

Route::post('/add-email-newsletter', [NewsletterController::class, 'AddEmailNewsletter'])->name('add-email-newsletter');

Route::get('/a-propos', [AboutController::class, 'showAbout'])->name('show-about');


// MENTIONS G

Route::controller(MentionsController::class)->group(function () {
    Route::get('/mentions-legales', 'showMentions')->name('show-mentions');
    Route::get('/chartes-des-cookies', 'showChartes')->name('show-chartes');
    Route::get('/conditions-generales', 'showCgv')->name('show-cgv');

});



Route::get('/contact', [ContactController::class, 'showContact'])->name('show-contact');
Route::post('/send-mail', [ContactController::class, 'sendMail'])->name('send-mail');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
