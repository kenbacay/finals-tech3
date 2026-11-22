<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'welcome'])->name('welcome');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/deployment-check', function () {
    return 'Tech3 latest code is deployed.';
});
