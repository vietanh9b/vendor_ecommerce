<?php
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [\App\Http\Controllers\Backend\VendorController::class,
    'dashboard'])
    ->name('dashboard');
