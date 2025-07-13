<?php

use App\Http\Middleware\IssetCity;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MaterialController;
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

        Route::get('/prices', [PriceController::class, "index"])->name('prices');

        Route::get('/materials', [MaterialController::class, "index"])->name('materials');
        Route::get('/materials/{slug}', [MaterialController::class, "page"])->name('materials_page');

        Route::get('/projects', [ProjectController::class, "index"])->name('projects');
        Route::get('/projects/{slug}', [ProjectController::class, "page"])->name('projects_page');

        Route::get('/services', [ServiceController::class, "index"])->name('services');
        Route::get('/services/{slug}', [ServiceController::class, "page"])->name('services_page');

        Route::get('/portfolio', [PortfolioController::class, "index"])->name('portfolio');
        Route::get('/portfolio/{slug}', [PortfolioController::class, "page"])->name('portfolio_page');
    });
