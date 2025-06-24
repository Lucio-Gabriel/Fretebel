<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-customer', function () {
    return view('Auth.customers.login');
})->name('login-customer');

Route::get('/register-customer', function () {
    return view('Auth.customers.register');
})->name('register-customer');

Route::get('/login-driver', function () {
    return view('Auth.drivers.login');
})->name('login-driver');

Route::get('/register-driver', function () {
    return view('Auth.drivers.register');
})->name('register-driver');
