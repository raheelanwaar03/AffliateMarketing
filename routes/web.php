<?php

use App\Http\Controllers\landingPage\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[WelcomeController::class,'landingPage'])->name('LandingPage');
Route::get('/Contact-Us',[WelcomeController::class,'contactUs'])->name('LandingPage.ContactUs');







// add new file for admin routes

require __DIR__.'/admin.php';
