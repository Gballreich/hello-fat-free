<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once ('vendor/autoload.php');

//instantiate F3 base
$f3 = Base::instance();

//define default root
$f3->route('GET /', function() {
    echo '<h1>Hello Fat-Free!</h1>';
});

//run fat-free
$f3->run();

