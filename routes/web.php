<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperarioController;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::resource('operarios', OperarioController::class);
