<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HobbyControl extends Controller
{
    public function index(): View
    {
        return view('hobbies');
    }
}
