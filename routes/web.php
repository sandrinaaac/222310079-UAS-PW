<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/room', function () {
    return view('room');
});

Route::get('/schedule', function () {
    return view('schedule');
});

Route::get('/reservation', function () {
    return view('reservation');
});

Route::get('/history', function () {
    return view('history');
});
