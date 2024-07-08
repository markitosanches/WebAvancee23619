<?php
require_once('controllers/HomeController.php');
require_once('routes/Route.php');

Route::get('', 'HomeController@index');
Route::get('/home-test', 'HomeController@test');

