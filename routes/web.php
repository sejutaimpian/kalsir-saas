<?php

use App\Models\Product;
use App\Models\Type;
use App\Models\Unit;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('dev', function () {
    dd(Unit::first());
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
