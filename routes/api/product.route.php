<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::controller(ProductController::class)->group(function() {
    Route::get('', 'get');
    Route::post('', 'create');
    Route::put('{id}','update');
    Route::delete('{id}','delete');
});
