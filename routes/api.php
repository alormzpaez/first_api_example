<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\V1\PostController as PostControllerV1;
use App\Http\Controllers\Api\V2\PostController as PostControllerV2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:sanctum')->prefix('v1')->group(function () {
    Route::apiResource('posts', PostControllerV1::class)->only(['index', 'show', 'destroy']);
});

Route::middleware('auth:sanctum')->prefix('v2')->group(function () {
    Route::apiResource('posts', PostControllerV2::class)->only(['index', 'show']);
});

Route::post('login', [LoginController::class, 'login']);