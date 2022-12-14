<?php

use App\Models\Order;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/charts', [\App\Http\Controllers\OrderController::class, 'index']);
