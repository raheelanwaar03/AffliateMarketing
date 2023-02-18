<?php

use App\Http\Controllers\landingPage\WelcomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[WelcomeController::class,'landingPage'])->name('LandingPage');
