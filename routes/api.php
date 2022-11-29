<?php

//use App\Http\Controllers\Api\V1\Admin\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Searches
    Route::apiResource('searches', 'SearchesApiController');

    // News Sources
    Route::apiResource('news-sources', 'NewsSourcesApiController');
});


Route::post('/login', [App\Http\Controllers\Api\V1\Admin\AuthController::class, 'login']);
Route::post('/register', [App\Http\Controllers\Api\V1\Admin\AuthController::class, 'register']);
Route::post('/logout', [App\Http\Controllers\Api\V1\Admin\AuthController::class, 'logout']);
