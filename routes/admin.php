<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/Admin/Dashboard',[AdminDashboardController::class,'dashboard'])->name('Admin.Dashboard');

// Add categories

Route::get('/Add/Categories',[CategoryController::class,'add'])->name('Admin.Add.Category');
Route::post('/Store/Categories',[CategoryController::class,'store'])->name('Admin.Store.Category');
Route::get('/All/Categories',[CategoryController::class,'index'])->name('Admin.All.Categories');
Route::get('/Show/Category/{slug}',[CategoryController::class,'show'])->name('Admin.Show.Category');
Route::get('/Delete/Category/{id}',[CategoryController::class,'destroy'])->name('Admin.Destroy.Category');
Route::get('/Edit/Category/{slug}',[CategoryController::class,'edit'])->name('Admin.Edit.Category');
Route::post('/Update/Category/{id}',[CategoryController::class,'update'])->name('Admin.Update.Category');
