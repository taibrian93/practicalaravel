<?php
use Illuminate\Support\Facades\Route;



Route::get('/', 'DashboardController@home');

Route::resource('author', 'AuthorController');

Route::resource('book', 'BookController');