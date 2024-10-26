<?php

use App\Http\Controllers\Api\PublicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('about',[PublicController::class,'about'])->name('about');
Route::get('contact',[PublicController::class,'contact'])->name('contact');
Route::get('index',[PublicController::class,'index'])->name('index');
Route::get('products',[PublicController::class,'products'])->name('products');
Route::get('singleProduct/{product}',[PublicController::class,'singleProduct'])->name('singleProduct');
Route::post('subscribe',[PublicController::class,'subscribe'])->name('subscribe');
Route::post('contact',[PublicController::class,'contactpost'])->name('contact');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
