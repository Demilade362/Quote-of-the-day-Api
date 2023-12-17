<?php

use App\Http\Controllers\QuoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['throttle:api'])->group(function () {
    Route::get('quote', [QuoteController::class, 'index']);
    Route::get('quotes/{quotes}', [QuoteController::class, 'show']);
    Route::get('quotes/search/{quotes:author}', [QuoteController::class, 'search']);
});
