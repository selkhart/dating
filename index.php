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

//$dataBase = new dbFunctions();
//$dbh = $dataBase->connect();

//create an instance of the base class
$f3 = Base::instance();


///fatfree enable error reporting
$f3->set('DEBUG', 3); // highest is 3 lowest 0;


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
                    $seeking = $_POST['genderLook'];
                    $biography = $_POST['biography'];

                    include('model/validateProfile.php');

                    $f3->set('errorsProfile', $errorsProfile);

                    if (sizeof($errorsProfile) > 0) {
                        $f3->set('email', $email);
                        $f3->set('state', $state);
                        $f3->set('seeking', $seeking);
                        $f3->set('biography', $biography);

                        echo Template::instance()->render("pages/profile.html");
                    } else {

                        $_SESSION['email'] = $email;
                        $_SESSION['state'] = $state;
                        $_SESSION['seeking'] = $seeking;
                        $_SESSION['biography'] = $biography;

                        if (isset($_SESSION['primeMember']) && !empty($_SESSION['primeMember'])) {
                            $primeMember = $_SESSION['primeMember'];
                            $primeMember->setEmail($email);
                            $primeMember->setState($state);
                            $primeMember->setSeeking($seeking);
                            $primeMember->setBio($biography);

                            $f3->reroute('./interests');
                        } else {
                            $member = $_SESSION['memberUser'];
                            $member->setEmail($email);
                            $member->setState($state);
                            $member->setSeeking($seeking);
                            $member->setBio($biography);

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

                        $primeMember->setCombinedActivities(implode( array_merge($chosenIndoorActivities, $chosenOutdoorActivities), ", "));

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


function exists($variable)
{
    return isset($variable) && !empty($variable);
}

//define a default rote to render results.html
$f3->route('GET|POST /pages/results', function ($f3) {



        if (isset($_SESSION['primeMember']) && !empty($_SESSION['primeMember'])) {
//            $combineActivities = array_merge($_SESSION['outdoorActivities'], $_SESSION['indoorActivities']);
            $primeMember = $_SESSION['primeMember'];

            //interests
//            $f3->set('combineActivities', $combineActivities);
            $f3->set('primeMember', 'primeMember');
        }
        else{
            $member = $_SESSION['memberUser'];
            $_SESSION['memberUser']->registerMember();

        }

        $f3->set('fname', $_SESSION['fname']);
        $f3->set('lname', $_SESSION['lname']);
        $f3->set('gender', $_SESSION['gender']);
        $f3->set('age', $_SESSION['age']);
        $f3->set('phone', $_SESSION['phone']);
        $f3->set('email', $_SESSION['email']);
        $f3->set('state', $_SESSION['state']);
        $f3->set('state', $_SESSION['state']);
        $f3->set('biography', $_SESSION['biography']);
        $f3->set('seeking',$_SESSION['genderLook']);

    echo Template::instance()->render("pages/summary.php");

});

$f3->route('GET|POST /pages/admin',function ($f3)
{
    global $dataBase;

   $members = $dataBase->getMembers();

    $f3->set('members',$members);

    echo Template::instance()->render('pages/admin.html');
});

//run fat free
$f3->run();