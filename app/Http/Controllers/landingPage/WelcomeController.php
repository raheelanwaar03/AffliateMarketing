<?php

namespace App\Http\Controllers\landingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function landingPage()
    {
        return view('welcome.index');
    }

    public function contactUs()
    {
        return view('welcome.contact');
    }
}
