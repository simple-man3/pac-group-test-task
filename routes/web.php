<?php

use App\Http\Controllers\Modules\Ship\Controllers\ShipController;
use Illuminate\Support\Facades\Route;

Route::prefix('/ship')->group(function () {
    Route::get('/{id}', [ShipController::class, 'get']);
    Route::post('/', [ShipController::class, 'create']);
    Route::post('search', [ShipController::class, 'search']);
    Route::patch('/{id}', [ShipController::class, 'patch']);
    Route::delete('/{id}', [ShipController::class, 'delete']);
});

Route::get('/', function () {
    return 'home_page';
});
