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
$f3->route('GET /', function(){

    //instantiate a template to integrate data into page easier
    $template = new Template();
    echo $template->render('pages/home.html');
});

//run fat free
$f3->run();