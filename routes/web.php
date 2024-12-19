<?php

use App\Livewire\DashboardPage;
use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');


//Les routes 
Route::group(['middleware' => 'auth'], function(){
    // Route::get('/attente', DashboardPage::class)->name('attente');
    Route::get('/dashboard', DashboardPage::class)->name('dashboard')->lazy();
    //Route::get('projets', Gestion::class)->name('gestion')->lazy();
    //Volt::route('/projets/id', 'projets/look')->name('look')->lazy();

    //Client
    //Route::get('client', Dash::class)->name('client')->lazy();

    
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
