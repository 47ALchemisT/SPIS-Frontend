<?php

    use App\Http\Controllers\ProfileController;
    use Illuminate\Foundation\Application;
    use Illuminate\Support\Facades\Route;
    use Inertia\Inertia;

    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/users', function () {
        return Inertia::render('Users');
    })->name('users');

    Route::get('/palakasan', function () {
        return Inertia::render('Palakasan');
    })->name('palakasan');

    Route::get('/palakasan/palakasanView', function () {
        return Inertia::render('PalakasanView');
    })->name('palakasanView');
    
    Route::get('palakasan/palakasanView/sportView', function () {
        return Inertia::render('SportView');
    })->name('sportView'); 

    Route::get('palakasan/palakasanView/sportSEView', function () {
        return Inertia::render('SportSEView');
    })->name('sportSEView');

    Route::get('palakasan/palakasanView/sportFOFView', function () {
        return Inertia::render('SportFOFView');
    })->name('sportFOFView');   

    Route::get('/venue', function () {
        return Inertia::render('Venue');
    })->name('venue');

    Route::get('/sports', function () {
        return Inertia::render('Sports');
    })->name('sports');

    Route::get('/college', function () {
        return Inertia::render('College');
    })->name('college');

    Route::get('/points', function () {
        return Inertia::render('Points');
    })->name('points');

    Route::get('/collegeadmin', function () {
        return Inertia::render('CollegeAdmin');
    })->name('collegeadmin');

    Route::get('/players', function () {
        return Inertia::render('Facilitator');
    })->name('players');

    Route::get('/games', function () {
        return Inertia::render('FacilitatorGames');
    })->name('/games');

    Route::get('/games/facilitatorgamesview', function () {
        return Inertia::render('FacilitatorGamesView');
    })->name('/games/facilitatorgamesview');

    Route::get('/facilitator', function () {
        return Inertia::render('FacilitatorDashboard');
    })->name('/facilitator');

require __DIR__.'/auth.php';
