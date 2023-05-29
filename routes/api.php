<?php

use App\Http\Controllers\UrlApiController;
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

Route::group(['prefix' => '/api', 'middleware' => 'auth:sanctum'], function(){
    Route::apiResource('/urls', UrlApiController::class)->names('api.urls');
});
