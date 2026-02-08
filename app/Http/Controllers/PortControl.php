<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortControl extends Controller
{
    public function index(): View
    {
        return view('portfolio');
    }
}
