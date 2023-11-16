<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $name = 'Ugo';
    $lastname = 'De Ughi';
    $flag = true;
    return view('home', compact('name', 'lastname', 'flag'));
});


Route::get('/news', function () {
    $test = 'ciao news';
    return view('news', compact('test'));

});

Route::get('/sport', function () {
    $test = 'ciao sport';
    return view('sport', compact('test'));

});

Route::get('/art', function () {
    $test = 'ciao art';
    return view('art', compact('test'));

});

Route::get('/about', function () {

    $test = 'ciao about';
    return view('about', compact('test'));

});


