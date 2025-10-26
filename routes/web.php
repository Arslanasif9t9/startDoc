<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckPassword;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Redirect;

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



Route::get('abc', function() {
    return view ('abc');
});

Route::post('submit', function(Request $request) {
    return $request->name;
})->middleware('CP');

Route::resource('abcd', PhotoController::class)
    ->missing(function (Request $request) {
        return Redirect::route('abcd.index');
    });


Route::singleton('ab', UserController::class)->creatable();