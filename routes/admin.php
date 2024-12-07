<?php
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [\App\Http\Controllers\Backend\AdminController::class, 'dashboard'])
    ->name('dashboard');