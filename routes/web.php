<?php

use App\DesignPatterns\Decorator\BasicInspection;
use App\DesignPatterns\Decorator\OilChange;
use App\DesignPatterns\Decorator\TireRotation;
use App\Models\Order;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/charts', [\App\Http\Controllers\OrderController::class, 'index']);


Route::get('/design-patterns/decorator', function (){

    $data = (new OilChange(new TireRotation(new BasicInspection())))->getDescription();

    return view('design-patterns.decorator', [
        'data' => $data
    ]);
});
