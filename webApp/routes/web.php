<?php

use App\Http\Controllers\EditDeleteStudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/bookDisplay',[BookController::class, 'index'] )->name('book');


Route::post('/book',[BookController::class, 'sendData']);

//Route::get('/book', 'App\Http\Controllers\BookController@index');

Route::get('/student', 'App\Http\Controllers\StudentController@listStudent');

Route::get('/bookDisplay',[BookController::class, 'index'] )->name('book');


Route::post('/book',[BookController::class, 'sendData']);

//Route::get('/book', 'App\Http\Controllers\BookController@index');

Route::get('/student', 'App\Http\Controllers\StudentController@listStudent');
//Route::get('/edit',[EditController::class, 'index']);

Route::post('/edit', 'App\Http\Controllers\EditController@index')->name('edit');

Route::post('/editDeleteStudent/{id}', 'App\Http\Controllers\EditDeleteStudentController@optStudent')->name('delete');
Route::get('/editDeleteStudent/{id}', 'App\Http\Controllers\EditDeleteStudentController@optStudent')->name('getDelete');


Route::get('/usertest', 'App\Http\Controllers\UserController@index');