<?php
    return [
        'Home' => ["method" => "HomeController@Home","middleware" => "Auth"],
        'Home/profile' => "HomeController@profile"
    ];
//'Home' => "HomeController@Home",
