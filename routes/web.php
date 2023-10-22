<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;

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

Route::get('/', function () {
    return view('welcome');
});

// 単純なあいさつのパラメータとして勘違いされるのを防ぐため、ランダムなメッセージを先頭に持ってきた
Route::get('/comments/random', [GreetingController::class, 'randomMsg']);

Route::get('/comments/{timeframe}', [GreetingController::class, 'greeting']);

Route::get('/comments/freeword/{timeframe}', [GreetingController::class, 'freeword']);
