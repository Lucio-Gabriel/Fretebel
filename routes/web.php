<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-customer', function () {
    return view('Auth.customers.login');
})->name('login-customer');

Route::get('/login-driver', function () {
    return view('Auth.drivers.login');
})->name('login-driver');
