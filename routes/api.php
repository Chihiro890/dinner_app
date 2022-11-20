<?php

use App\Http\Controllers\API\DinnerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CommentController;

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

Route::apiResource('dinners', DinnerController::class)
    ->names('api.dinners');

Route::apiResource('dinners.comments', CommentController::class)
    ->only(['store', 'show', 'update', 'destroy'])
    ->names('api.dinners.comments');
