<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function(){
    return view('template.default');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::get('/calculate', [App\Http\Controllers\MyController::class, 'info']);
Route::post('/calculate', [App\Http\Controllers\MyController::class, 'calculate']);
Route::get('/workshop', [WorkshopController::class, 'index']);
Route::post('/workshop', [WorkshopController::class, 'store']);

Route::resource('/flights', App\Http\Controllers\FlightController::class);
