<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/bookings', function () {
    return view('bookings');
});
Route::get('/create_booking', function () {
    return view('create_booking');
});