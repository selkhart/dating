<?php
session_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

?>


<!-- Sarah Elkhart
    2/02/18
    summary.php -->

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/formStyles.css">
    <title>Summary</title>
</head>
<body>
<!--NAV BAR-->
<nav class="navbar navbar-default p-2 mb-1">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">My Dating Website</a>
        </div>
        <ul class="nav navbar-nav">
            <!--            FIX HOME LINK ****************************-->
            <li class="active"><a href="../">Home</a></li>
        </ul>
    </div>
</nav>
<!-- CLOSE NAV BAR-->

<div class="container">
    <!-- MAIN BODY -->
    <div class="card mx-auto" id="mainBody">
        <div class="card-block">
            <div class="row">
                <div class="col-md-6 justify-content-start" >
                    <!-- TABLE -->
                    <ul class="list-group ml-2 mt-2 mb-2">
                        <li class="list-group-item">Name: {{exists($fname) ? $fname : ''}}  {{exists($lname) ? $lname : ''}}</li>
                        <li class="list-group-item">Gender: {{exists($gender) ? $gender : ''}} </li>
                        <li class="list-group-item">Age: {{exists($age) ? $age : ''}} </li>
                        <li class="list-group-item">Phone: {{exists($phone) ? $phone : ''}} </li>
                        <li class="list-group-item">Email: {{exists($email) ? $email : ''}} </li>
                        <li class="list-group-item">State: {{exists($state) ? $state : ''}} </li>
                        <li class="list-group-item">Seeking: {{exists($seeking) ? $seeking : ''}} </li>
                        <check if="{{@primeMember == 'primeMember'}}">
                                <li class="list-group-item">
                                    Interests:
                                    <repeat group="{{ @combineActivities }}" value="{{ @value }}">
                                        {{ @value }}
                                    </repeat>
                                    <repeat group="{{ @outdoorList }}" value="{{ @value }}">
                                        {{ @value }}
                                    </repeat>
                                </li>

                        </check>

                    </ul>
                </div>
                <div class="col-md-6">
                    <!--CHANGED ID FROM accountImg-->
                    <img class="mx-auto rounded" src="../images/profilePic.png" alt="generic picture" id="profilePic">
                    <!-- BIOGRAPHY -->
                    <div class="container justify-content-center text-center">
                        <h3>Biography</h3>
                        <p>{{ @biography }}</p>
                    </div>
                </div>
            </div>
            <div class="d-flex mx-auto justify-content-center">
                <button class="btn btn-primary" id="contactMeButton">Contact Me!</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>