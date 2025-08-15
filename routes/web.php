<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Middleware\EnsureUserHasRole;
use App\Http\Controllers;

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');
Route::get("/", [Controllers\ListingController::class,"index"])->name("jobListings.index");

Route::get('dashboard', function () {

    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified', EnsureUserHasRole::class/*.':job_seeker'*/])->name('dashboard');
//todo add middleware to ensure user has role at "job_seeker", remove comments

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
