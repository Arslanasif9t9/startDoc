<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/here', 'there');

Route::get('/user/{name?}', function (string $name = 'arslan') {
    // return view('user');
    return 'user page ' . $name;
});