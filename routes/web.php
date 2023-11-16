<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $message = 'Questo è il mio HOME';
    $links = [
        '',
        'news',
        'sport',
        'art',
        'about'
    ];
    $titles = [
        'HOME',
        'NOTIZIE',
        'SPORT',
        'ARTE',
        'SU DI NOI'
    ];
    return view('home', compact('message', 'links', 'titles'));
});


Route::get('/news', function () {
    $text = 'Questa è la mia pagina News';
    return view('news', compact('text'));

});

Route::get('/sport', function () {
    $text = 'Questa è la mia pagina Sport';
    return view('sport', compact('text'));

});

Route::get('/art', function () {
    $text = 'Questa è la mia pagina Art';
    return view('art', compact('text'));

});

Route::get('/about', function () {

    $text = 'Questa è la mia pagina About';
    return view('about', compact('text'));

});


