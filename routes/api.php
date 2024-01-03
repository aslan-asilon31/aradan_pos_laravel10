<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserAPIController;


Route::group(['prefix' => 'v1'], function () {
    Route::get('users', [UserAPIController::class, 'listdata']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
