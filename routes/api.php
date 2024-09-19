<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->prefix('v1')->group(function() {
    Route::get('user', function(Request $request) {
        return $request->user();
    });
    Route::apiResources([
        'books' => BookController::class,
        'authors' => AuthorController::class
    ]);
});

