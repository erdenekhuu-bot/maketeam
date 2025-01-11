<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\CompanyController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/tokens/create',function(Request $request){
    $token = $request->user()->createToken($request->token_name);
    return ['token' => $token->plainTextToken];
});

// Route::middleware('auth:sanctum')->group(function () {
//     Route::apiResource('posts', PostController::class);
// });

Route::apiResource('posts', PostController::class);
Route::apiResource('companies', CompanyController::class);
