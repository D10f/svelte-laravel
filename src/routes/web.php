<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [function () {
        sleep(1);
    }]);
});

Route::get('/about', function () {
    return Inertia::render('About', [
        'test' => 'hello'
    ]);
});
