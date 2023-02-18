<?php

use App\Http\Controllers\admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/Admin/Dashboard',[AdminDashboardController::class,'dashboard'])->name('Admin.Dashboard');
