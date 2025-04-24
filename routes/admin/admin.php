<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Admin\AdminController;


Route::middleware(['auth', 'verified','roleMiddleware:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
});

 