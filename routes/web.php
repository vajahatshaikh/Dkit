<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/auth-signin', function () {
    return view('auth-signin');
});
Route::get('/auth-signup', function () {
    return view('auth-signup');
});
Route::get('/bc_alert', function () {
    return view('bc_alert');
});
Route::get('/sample-page', function () {
    return view('sample-page');
});
