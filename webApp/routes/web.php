<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bookDisplay',[BookController::class, 'index'] )->name('book');


Route::post('/book',[BookController::class, 'sendData']);

//Route::get('/book', 'App\Http\Controllers\BookController@index');

Route::get('/student', 'App\Http\Controllers\StudentController@listStudent');