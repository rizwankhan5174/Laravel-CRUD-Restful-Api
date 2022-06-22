<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// public routess
//Route::resource('products',ProductsController::class);
Route::get('/products/search/{name}',[ProductsController::class,'search']);
Route::get('/products',[ProductsController::class,'index']);
Route::get('/products/{id}',[ProductsController::class,'show']);


// protected routess
Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::post('/products',[ProductsController::class,'store']);
    Route::put('/products/{id}',[ProductsController::class,'update']);
    Route::delete('/products/{id}',[ProductsController::class,'destroy']);
    Route::post('/logout',[AuthController::class,'logout']);
});
Route::post('/register',[AuthController::class,'register']);



Route::post('/login',[AuthController::class,'login']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });