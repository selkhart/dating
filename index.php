<?php

//Sarah Elkhart
//17 January 2018
//index.php

//require the autoload file
require_once('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();

//set debug (error reporting) level
$f3->set('DEBUG',3);

//set default route to home.html
$f3->route('GET|POST /', function() {
    echo Template::instance()->render('pages/home.html');
});

//set route to personal information page
$f3->route('GET|POST /myInfo', function() {
    echo Template::instance()->render('pages/personal_information.php');
});

//set route to profile page
$f3->route('GET|POST /profile', function() {
    echo Template::instance()->render('pages/profile.php');
});

//set route to interests page
$f3->route('GET|POST /interests', function() {
    echo Template::instance()->render('pages/interests.php');
});

//set route to summary
$f3->route('GET|POST /summary', function() {
    echo Template::instance()->render('pages/summary.php');
});

//run fat free
//$f3->run();