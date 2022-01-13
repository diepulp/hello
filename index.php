<?php
    ini_set("display_errors",1);
    error_reporting(E_ALL);

    require_once("vendor/autoload.php");

    //create an instance of the Base Class
    $f3 = Base::instance();

    //define a default route
    $f3 -> route('GET /', function(){
        echo "<h1>Hello world</h1>";
        $view = new Template();
        echo $view -> render('views/home.html');
});

    //Run fat-free
    $f3 -> run();