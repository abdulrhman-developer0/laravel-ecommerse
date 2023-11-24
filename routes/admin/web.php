<?php

use App\Http\Controllers\Web\Admin\ {
    DashboardController
};
use Illuminate\Support\Facades\Route;

Route::middleware('auth:web-admin')->group(function () {
    Route::get('/', DashboardController::class)
        ->name('dashboard');
});

require __DIR__ . '/auth.php';
