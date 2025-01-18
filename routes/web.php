<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'tales' => [
            [
                'id' => 1,
                'title' => 'Cap',
                'intro' => '$50,000'  
            ],
            [
                'id' => 2,
                'title' => 'Prog',
                'intro' => '$10,000'  
            ],
            [
                'id' => 3,
                'title' => 'FirstMate',
                'intro' => '$40,000'  
            ]
        ]
    ]);

});

Route::get('/upload', function () {
    return view('upload');
});


Route::get('/tales/{id}', function ($id) {
    dd($id);
    return view('upload');
});