<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $name = 'Ugo';
    $lastname = 'De Ughi';
    $flag = true;
    return view('home', compact('name', 'lastname', 'flag'));
});


Route::get('/news', function () {

});

Route::get('/sport', function () {

});

Route::get('/art', function () {

});

Route::get('/about', function () {

    $test = 'ciao about';
    return view('about', compact('test'));

});


