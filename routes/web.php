<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/here', 'there');

Route::get('/user/{nme?}', function (?string $name = 'arslan') {
    // return view('user');
    return 'user page ' . $name;
});


Route::get('/con/{id?}', function (?string $name = 'arslan') {
    // return view('user');
    return 'user page ' . $name;
})->where('id', '[0-9]+');


Route::get('/whcon/{id?}', function (?string $name = 'arslan') {
    // return view('user');
    return 'user page ' . $name;
})->whereNumber('id');


Route::get('/whincon/{id}', function (string $name) {
    // return view('user');
    return 'user page ' . $name;
})->whereIn('id', ['100', '200', '300']);