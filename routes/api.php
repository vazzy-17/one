<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\BinanceController;
use App\Http\Controllers\CoinMarketCapController;
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


Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('barevisi_code',[PostController::class, 'get_code'] );


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/coingecko/price/{symbol}', [CryptoController::class, 'getPrice']);
// // Route::apiResource('posts', PostController::class);
// Route::middleware('auth:sanctum')->get('/posts', [PostController::class, 'index']);


// Route untuk mendapatkan harga cryptocurrency
Route::get('/binance/price/{symbol}', [BinanceController::class, 'getPrice']);

Route::get('/coinmarketcap/price/{symbol}', [CoinMarketCapController::class, 'getPrice']);