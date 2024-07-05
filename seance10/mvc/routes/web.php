<?php
require_once('controllers/HomeController.php');
require_once('routes/Route.php');

Route::get('/home', 'HomeController@index');
Route::get('/home-test', 'HomeController@test');

