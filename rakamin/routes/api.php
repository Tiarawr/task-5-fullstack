<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ArticleController;

// Prefix API v1
Route::prefix('v1')->group(function () {

    // Route untuk login API (token-based)
    Route::post('/login', [AuthController::class, 'login']);

    // Route yang dilindungi oleh middleware auth:api
    Route::middleware('auth:api')->group(function () {
        Route::apiResource('articles', ArticleController::class)->names([
            'index'   => 'api.articles.index',
            'store'   => 'api.articles.store',
            'show'    => 'api.articles.show',
            'update'  => 'api.articles.update',
            'destroy' => 'api.articles.destroy',
        ]);
    });
});



