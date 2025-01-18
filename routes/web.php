<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/yes', function ( ) {
    return 'yes';
});

Route::get('/no', function () {
    return 'no';
});

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/bleh', function () {
    return 'bleh';
});

Route::get('/finnish', function () {
    return 'finnish';
});

Route::get('/reacher', function () {
    return 'reacher';
});

Route::get('/arr', function (){
    return 'arr';
});

Route::get('/a', function (){
    return 'a';
});

Route::get('/b', function () {
    return 'b';
});

Route::get('/c', function () {
    return 'c';
});

Route::get('/d', function () {
    return 'd';
});

Route::get('/e', function () {
    return 'e';
});

Route::get('/fu', function () {
    return 'fu';
});