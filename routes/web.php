<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortControl;
use App\Http\Controllers\AbtControl;
use App\Http\Controllers\HobbyControl;

Route::get('/', [PortControl::class, 'index']);
Route::get('/about', [AbtControl::class, 'index']);
Route::get('/hobbies', [HobbyControl::class, 'index']);