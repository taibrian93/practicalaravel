<?php
use Illuminate\Support\Facades\Route;



Route::get('/', 'DashboardController@home');


Route::resource('author', 'AuthorController');
Route::post('getAuthor', 'AuthorController@search')->name('author.search');

Route::resource('book', 'BookController');

