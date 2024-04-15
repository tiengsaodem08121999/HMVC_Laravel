<?php

use App\Modules\Category\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
$namespace = 'App\Modules\Category\Controllers';
Route::group(
    ['module'=>'Category', 'namespace' => $namespace],
    function() {
        Route::get('category', [CategoryController::class,'index'])->name('index');
        Route::get('create', [CategoryController::class,'create'])->name('create');
        Route::post('store', [CategoryController::class, 'store'])->name('store');
    }
);