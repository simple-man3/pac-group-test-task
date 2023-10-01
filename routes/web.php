<?php

use App\Http\Controllers\Modules\CabinCategory\Controllers\CabinCategoryController;
use App\Http\Controllers\Modules\Front\Controllers\FrontController;
use App\Http\Controllers\Modules\Ship\Controllers\ShipController;
use Illuminate\Support\Facades\Route;

Route::prefix('/ship')->group(function () {
    Route::get('/{id}', [ShipController::class, 'get']);
    Route::post('/', [ShipController::class, 'create']);
    Route::post('search', [ShipController::class, 'search']);
    Route::patch('/{id}', [ShipController::class, 'patch']);
    Route::delete('/{id}', [ShipController::class, 'delete']);
});

Route::prefix('/cabin-category')->group(function () {
    Route::get('/{id}', [CabinCategoryController::class, 'get']);
    Route::post('/', [CabinCategoryController::class, 'create']);
    Route::post('search', [CabinCategoryController::class, 'search']);
    Route::patch('/{id}', [CabinCategoryController::class, 'patch']);
    Route::delete('/{id}', [CabinCategoryController::class, 'delete']);
});

Route::get('/', [FrontController::class, 'index']);
