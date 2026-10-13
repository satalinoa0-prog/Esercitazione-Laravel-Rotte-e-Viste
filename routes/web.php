<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/servizi', function () {
    return view('servizi');
})->name('servizi'); // <-- Modificato qui da 'services' a 'servizi'

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi-siamo');