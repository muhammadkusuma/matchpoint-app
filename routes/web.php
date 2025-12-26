<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

// Ubah route default '/' 
Route::get('/', [HomeController::class, 'index'])->name('home');


// Route untuk Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Route untuk Register
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Dummy Action untuk Form (Supaya tidak error saat diklik)
Route::post('/login', function () {
    return "Proses Login (Belum ada logika backend)";
});
Route::post('/register', function () {
    return "Proses Register (Belum ada logika backend)";
});

Route::get('/fields', [App\Http\Controllers\FieldController::class, 'index'])->name('fields.index');

Route::get('/my-bookings', [App\Http\Controllers\BookingController::class, 'myBookings'])->name('bookings.my');


// Route Halaman Bayar
Route::get('/payment/{id}', [App\Http\Controllers\PaymentController::class, 'show'])->name('payments.show');

// Route Proses Upload Bukti (Post)
Route::post('/payment/{id}/upload', [App\Http\Controllers\PaymentController::class, 'upload'])->name('payments.upload');