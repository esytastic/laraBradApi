<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('log.api.requests')->group(function () {
    // Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    Route::resource('products', ProductController::class);
    Route::get('/products/search/{name}', [ProductController::class, 'search'])->name('searchproducts');
    // Route::post('products',[ProductController::class,'store'])->name('storeproducts');
    // Route::get('product', [ProductController::class, 'index'])->name('getproducts');

    // });
});

Route::get('first', function () {
    return response()->json([
        'first' => 'sdaf'
    ]);
});


