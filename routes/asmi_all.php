<?php
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;
    use App\Http\Controllers\Page\PageController;

    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/page/{slug}', [PageController::class, "index"])->name('page');
