<?php
    // Define your location project directory in htdocs (EX THE FULL PATH: D:\xampp\htdocs\x-kang\simple-routing-with-php)
    $project_location = "/x-kang/simple-routing-with-php";
    $me = $project_location;

    // For get URL PATH
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $me.'/' :
            require "views/home.php";
            break;
        case $me.'/about' :
            require "views/about.php";
            break;
        case $me.'/contact' :
            require "views/contact.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }
