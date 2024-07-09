<?php
use App\Controllers;
use App\Routes\Route;

Route::get('/home', 'HomeController@index');
Route::get('/home-test', 'HomeController@test');

Route::get('/client', 'ClientController@index');
Route::get('/client/create', 'ClientController@create');
Route::get('/client/show', 'ClientController@show');



Route::dispatch();

