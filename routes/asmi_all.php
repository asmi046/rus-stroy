<?php

use App\Http\Middleware\IssetCity;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;
    use App\Http\Controllers\Page\PageController;



    Route::middleware(IssetCity::class)->group( function() {
        Route::get('/', [IndexController::class, "index"])->name('home');
        Route::get('/page/{slug}', [PageController::class, "index"])->name('page');
    });
