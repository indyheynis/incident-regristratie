<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidentController;


Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/incidents', [IncidentController::class, 'index'])
    ->name('incidents.index');

Route::get('/incidents/create', [IncidentController::class, 'create'])
    ->name('incidents.create');

Route::post('/incidents', [IncidentController::class, 'store'])
    ->name('incidents.store');


Route::redirect('/incidents/index', '/incidents');
