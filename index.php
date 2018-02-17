<?php

//Sarah Elkhart
//17 January 2018
//index.php
//start a session
error_reporting(E_ALL);
ini_set("display_errors", 1);

// fat free
require_once('vendor/autoload.php');

//start session
session_start();


//create an instance of the base class
$f3 = Base::instance();

//define a default rote to render home.html
$f3->route('GET /', function () {
    $view = new View; //could be template too, ask
    echo $view->render('pages/home.html');
});

//activities arrays
$f3->set("outdoorActivities", array("hiking", "biking", "swimming",
    "collecting",
    "walking", "climbing"));
$f3->set("indoorActivities", array("tv", "movies", "cooking", "board games", "puzzles", "reading",
    "playing cards", "video games"));

//Define a default route
$f3->route('GET|POST /pages/@pageName', function ($f3, $params) {

    switch ($params['pageName']) {
        case 'personal' :

            //ipost method request
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['submit'])) {

                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $age = $_POST['age'];
                    $gender = $_POST['gender'];
                    $phone = $_POST['phone'];

                    $_SESSION['primeMember'] = $_POST['primeMember'];

                    //check for prime membership when submits
                    if (isset($_POST['primeMember']) && !empty($_POST['primeMember'])) {
                        $primeMember = new PremiumMember($fname, $lname, $age, $gender, $phone, "", "");
                        $_SESSION['primeMember'] = $primeMember;
                    } else {
                        //create a not prime member account
                        $member = new Member($fname, $lname, $age, $gender, $phone);
                        $_SESSION['memberUser'] = $member;
                    }

                    include('model/validation.php');

                    $f3->set('member', $_SESSION['member']);
                    $f3->set('errors', $errors);
                    // $f3->set('success', $success);


                    if (sizeof($errors) > 2) {
                        $f3->set('fname', $fname);
                        $f3->set('lname', $lname);
                        $f3->set('age', $age);
                        $f3->set('gender', $gender);
                        $f3->set('phone', $phone);

                        echo Template::instance()->render('pages/personal_information.html');

                    } else {
                        $_SESSION['fname'] = $_POST['fname'];
                        $_SESSION['lname'] = $lname;
                        $_SESSION['age'] = $age;
                        $_SESSION['gender'] = $gender;
                        $_SESSION['phone'] = $phone;

                        $f3->reroute('./profile');
                    }

                }

            } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                echo Template::instance()->render("pages/personal_information.html");
            }
            break;

        case 'profile':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['submit'])) {
                    $email = $_POST['email'];
                    $state = $_POST['state'];
                    $genderLook = $_POST['genderLook'];
                    $biography = $_POST['biography'];

                    include('model/validateProfile.php');

                    $f3->set('errorsProfile', $errorsProfile);

                    if (sizeof($errorsProfile) > 0) {
                        $f3->set('email', $email);
                        $f3->set('state', $state);
                        $f3->set('genderLook', $genderLook);
                        $f3->set('biography', $biography);

                        echo Template::instance()->render("pages/profile.html");
                    } else {
                        $_SESSION['email'] = $email;
                        $_SESSION['state'] = $state;
                        $_SESSION['genderLook'] = $genderLook;
                        $_SESSION['biography'] = $biography;

                        if (isset($_SESSION['primeMember']) && !empty($_SESSION['primeMember'])) {
                            $f3->reroute('./interests');
                        } else {
                            $f3->reroute('./results');
                        }
                    }
                }

            } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                echo Template::instance()->render('pages/profile.html');
            }
            break;
        case 'interests':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['submit'])) {
                    $chosenOutdoorActivities = $_POST['outdoorActivities'];
                    $chosenIndoorActivities = $_POST['indoorActivities'];

                    include('model/validation.php');

                    $f3->set('errors', $errors);
                    $f3->set('success', $success);

                    if (isset($errors['indoorActivities']) || isset($errors['outdoorActivities'])) {
                        $f3->set('chosenIndoorActivities', $chosenIndoorActivities);
                        $f3->set('chosenOutdoorActivities', $chosenOutdoorActivities);

                        echo Template::instance()->render('pages/interests.html');
                    } else {

                        $primeMember = $_SESSION['primeMember'];

//                        $primeMember->setIndoorActivities($chosenIndoorActivities);
//                        $primeMember->setOutdoorActivities($chosenOutdoorActivities);

                        $_SESSION['indoorActivities'] = $chosenIndoorActivities;
                        $_SESSION['outdoorActivities'] = $chosenOutdoorActivities;

                        $_SESSION['primeMember'] = $primeMember;


                        $f3->reroute('./results');
                    }
                }
            } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                echo Template::instance()->render('pages/interests.html');
            }
            break;

        default:
            $f3->error(404);
    }
});

//define a default rote to render home.html
$f3->route('GET|POST /pages/results', function ($f3) {

    echo $_SESSION['member'];
    $primeMember = $_SESSION['primeMember'];

    var_dump($primeMember);

    $f3->set('primeMember', $_SESSION['primeMember']);

    if (isset($_SESSION) && !empty($_SESSION)) {

        if($primeMember != null)
        {
            $combineActivities = array_merge($_SESSION['outdoorActivities'], $_SESSION['indoorActivities']);
        }
        //var_dump($primeMember);

        //info for all memebers

        $f3->set('fname', $primeMember->getFname());
        $f3->set('lname', $primeMember->getLname());
        $f3->set('gender', $primeMember->getGender());
        $f3->set('age', $primeMember->getAge());
        $f3->set('phone', $primeMember->getPhone());
        $f3->set('email', $_SESSION['email']);
        $f3->set('state', $_SESSION['state']);
        $f3->set('biography', $_SESSION['biography']);
        $f3->set('genderLook', $_SESSION['genderLook']);

        //interests
        $f3->set('combineActivities', $combineActivities);

    }
    echo Template::instance()->render("pages/summary.php");

});

///fatfree enable error reporting
$f3->set('DEBUG', 3); // highest is 3 lowest 0;

//run fat free
$f3->run();