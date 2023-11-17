<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $text = 'Questa è la mia HOMEPAGE';
    $pages = [
        [
            'link' => '',
            'page' => 'Home'
        ],
        [
            'link' => 'news',
            'page' => 'Notizie'
        ],
        [
            'link' => 'sport',
            'page' => 'Sport'
        ],
        [
            'link' => 'art',
            'page' => 'Arte'
        ],
        [
            'link' => 'about',
            'page' => 'Su di noi'
        ]

    ];


    return view('home', compact('text', 'pages'));
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


