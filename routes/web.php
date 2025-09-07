<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkspaceController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/workspaces', [WorkspaceController::class, 'store'])
    ->name('workspaces.store');
