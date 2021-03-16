<?php

use Illuminate\Support\Facades\Route;

Route::get('/testuser', function () {
    return view('home');
});

