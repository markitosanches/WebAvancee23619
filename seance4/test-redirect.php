<?php
require_once('classes/Redirect.php');

// $url = new Redirect;
// $url->url('https://www.google.com/');

Redirect::url('https://www.google.com/');

echo Redirect::$name;

?>