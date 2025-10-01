<?php

use App\Http\Controllers\Api\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::prefix('Auth')->group(function(){
//     Route::post('/login',LoginController::class);
// });

Route::prefix('Auth')->group(function () {
    Route::post('/login', LoginController::class);
});
