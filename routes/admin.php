<?php
use Illuminate\Support\Facades\Route;

//Route::get('admin/login',[\App\Http\Controllers\Backend\AdminController::class,'login'])->name('admin.login');

Route::get('dashboard', [\App\Http\Controllers\Backend\AdminController::class, 'dashboard'])
    ->name('dashboard');
