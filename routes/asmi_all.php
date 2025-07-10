<?php

use App\Http\Middleware\IssetCity;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PortfolioController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;
    use App\Http\Controllers\Page\PageController;



    Route::middleware(IssetCity::class)->group( function() {
        Route::get('/', [IndexController::class, "index"])->name('home');
        Route::get('/page/{slug}', [PageController::class, "index"])->name('page');

        Route::get('/review', [ReviewController::class, "all_review_page"])->name('all_review_page');
        Route::get('/all_rewiews', [ReviewController::class, "index"])->name('rewiews');

        Route::get('/contacts', [ContactsController::class, "index"])->name('contacts');

        Route::get('/portfolio', [PortfolioController::class, "index"])->name('portfolio');
        Route::get('/portfolio/{slug}', [PortfolioController::class, "page"])->name('portfolio_page');
    });
