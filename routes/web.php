<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Middleware\EnsureUserHasRole;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified', EnsureUserHasRole::class/*.':job_seeker'*/])->name('dashboard');
//todo add middleware to ensure user has role at "job_seeker", remove comments

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
