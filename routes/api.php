<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\WordController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::apiResource("words", WordController::class);


Route::controller(WordController::class)->prefix('get')->group(function () {
    Route::get('{difficulty}/randomword', 'getRandomWord');
    Route::get('/dailyword', 'getDailyWord');
});

Route::controller(WordController::class)->prefix('post')->group(function () {
    Route::post('/changedailyword', 'changeDailyWord');
});

