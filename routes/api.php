<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Api\FeatureController;
use App\Http\Controllers\Api\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);
Route::get('profile', [AuthController::class, 'profile'])->middleware('auth:api');
Route::put('profile/update', [AuthController::class, 'updateProfile'])->middleware('auth:api');


Route::get('features', [FeatureController::class, 'index'])->middleware('auth:api');
Route::get('products', [ProductController::class, 'index'])->middleware('auth:api');
Route::post('products-by-feature', [ProductController::class, 'getProductsByFeature'])->middleware('auth:api');
Route::post('product-by-name', [ProductController::class, 'getProductByName'])->middleware('auth:api');
Route::post('add-to-cart', [ProductController::class, 'addToCart'])->middleware('auth:api');
Route::get('checkout', [ProductController::class, 'checkout'])->middleware('auth:api');


