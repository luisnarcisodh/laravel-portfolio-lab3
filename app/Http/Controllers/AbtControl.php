<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AbtControl extends Controller
{
    public function index(): View
    {
        return view('about');
    }
}
