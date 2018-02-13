<?php

//Sarah Elkhart
//17 January 2018
//index.php
//start a session

//require the autoload file
require_once('vendor/autoload.php');
session_start();

//create an instance of the Base Class
$f3 = Base::instance();

//set debug (error reporting) level
$f3->set('DEBUG',3);

//set default route to home.html
$f3->route('GET|POST /', function() {
    echo Template::instance()->render('pages/home.html');
});

//set route to personal information page
$f3->route('GET|POST /myInfo', function($f3) {
    $_SESSION['inputFirstName'] = $_POST['inputFirstName'];
    $_SESSION['inputLastName'] = $_POST['inputLastName'];
    $_SESSION['inputAge'] = $_POST['inputAge'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['inputPhone'] = $_POST['inputPhone'];

    if(isset($_POST['submit']))
    {
       $inputFirstName = $_POST['inputFirstName'];
       $inputLastName = $_POST['inputLastName'];
       $inputAge = $_POST['inputAge'];


        include "model/validation.php";

        $f3->set('errors',$errors);

        echo print_r($errors);
        echo print_r($_POST);

        if($errors)
        {
            $f3->set('inputFirstName',$inputFirstName);
            $f3->set('inputLastName',$inputLastName);
            $f3->set('inputAge',$inputAge);

            echo Template::instance()->render('pages/personal_information.html');

        }
        echo "TOYGAN";

    }
   echo Template::instance()->render('pages/personal_information.html');
});

//set route to profile page
$f3->route('GET|POST /profile', function() {
    $_SESSION['inputEmail'] = $_POST['inputEmail'];
    $_SESSION['inputState'] = $_POST['inputState'];
    $_SESSION['inputSeeking'] = $_POST['inputSeeking'];
    $_SESSION['inputBiography'] = $_POST['inputBiography'];

    echo Template::instance()->render('pages/profile.html');
});

//set route to interests page
$f3->route('GET|POST /interests', function() {
    echo Template::instance()->render('pages/interests.html');
});

//set route to summary
$f3->route('GET|POST /summary', function($f3) {

    $_SESSION['indoors'] = $_POST['indoors'];
    $_SESSION['outdoors'] = $_POST['outdoors'];

    $f3->set('firstName', $_SESSION['inputFirstName']);
    $f3->set('lastName', $_SESSION['inputLastName']);
    $f3->set('age', $_SESSION['inputAge']);
    $f3->set('gender', $_SESSION['gender']);
    $f3->set('phone', $_SESSION['inputPhone']);
    $f3->set('email', $_SESSION['inputEmail']);
    $f3->set('state', $_SESSION['inputState']);
    $f3->set('seeking', $_SESSION['inputSeeking']);
    $f3->set('bio', $_SESSION['inputBiography']);
    $f3->set('indoors', $_SESSION['indoors']);
    $f3->set('outdoors', $_SESSION['outdoors']);
    $template = new Template();
    echo $template->render('pages/summary.html');


});

//run fat free
$f3->run();
