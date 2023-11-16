<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $name = 'Ugo';
    $lastname = 'De Ughi';
    $flag = true;
    return view('home', compact('name', 'lastname', 'flag'));
});


Route::get('/about', function () {
    return view('about');

});
