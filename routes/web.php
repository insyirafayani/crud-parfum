<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParfumController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('parfum', ParfumController::class);
