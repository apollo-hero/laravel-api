<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('register', 'UserController@register');
Route::post('verify-phone', 'AuthController@verifyPhone');
Route::post('forget-password', 'AuthController@forgetPassword');
Route::post('reset-password', 'AuthController@resetPassword');
Route::post('complaint', 'GeneralController@complaint');
Route::post('add-to-cart', 'CartController@addToCart');
