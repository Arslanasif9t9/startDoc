<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('view', 'user')->name('v');

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



Route::get('/globlecon/{id}', function (string $name) {
    // return view('user');
    return 'user page ' . $name;
})->name('id');

Route::get('/search/{search}/{name}', function (string $search, string $name) {
    return $search . " " . $name;
})->where('search', '.*');

Route::get('/user/{id}/profile', function (string $id) {
    return 'hi user ' . $id;
})->name('profile');




Route::get('route', function () {
    $current = Route::current();
    $name = Route::currentRouteName();
    $action = Route::currentRouteAction();
    dd($current, $name, $action);
})->name('r');



