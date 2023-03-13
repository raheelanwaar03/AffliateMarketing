<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/Admin/Dashboard',[AdminDashboardController::class,'dashboard'])->name('Admin.Dashboard');

// Add categories

Route::get('/Add/Categories',[CategoryController::class,'add'])->name('Admin.Add.Category');
Route::post('/Store/Categories',[CategoryController::class,'store'])->name('Admin.Store.Category');
