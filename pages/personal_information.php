
<!-- Sarah Elkhart
    1/29/18
    personal_information.php
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/formStyles.css">
    <title>Personal Information</title>
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

<!--MAIN BODY-->
<div class="container">
    <div class="card mx-auto" id="mainBody">
        <div class="card-block">
            <h2>Personal Information</h2>
            <hr>
            <!-- OPEN FORM-->
            <form action="../dating/profile" method="post">
                <div class="row h-100">
                    <div class="col-md-8 justify-content-start" id="formBody">
                        <!-- FIRST NAME -->
                        <div class="form-group">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" class="form-control" id="inputFirstName" aria-describedby="firstName" placeholder="Enter First Name">
                        </div>
                        <!-- LAST NAME -->
                        <div class="form-group">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" class="form-control" id="inputLastName" placeholder="Enter Last Name">
                        </div>
                        <!--AGE-->
                        <div class="form-group">
                            <label for="inputAge">Age</label>
                            <input type="text" class="form-control" id="inputAge" placeholder="Enter Age">
                        </div>
                        <!--GENDER-->
                        <div class="form-group">
                            <label>Gender</label>
                            <br>
                            <div class="container mx-auto" id="gender">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline" id="female">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <!--PHONE NUMBER-->
                        <div class="form-group">
                            <label for="inputPhone">Phone Number</label>
                            <input type="text" class="form-control" id="inputPhone" placeholder="Enter Phone Number">
                        </div>
                    </div>
                    <!--DISCLAIMER-->
                    <div class="col-md-4" id="column2">
                        <div class="alert alert-secondary text-center" role="alert">
                            <strong>Note: </strong>All information entered is protected by our <a href="">privacy policy</a>. Profile information can only be viewed by others with your permission.
                        </div>
                        <!-- BUTTON -->
                        <div class="d-flex align-items-end justify-content-end w-100" id="buttonSection">
                            <button class="btn btn-primary" name="submit">Next ></button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- CLOSE FORM-->
        </div>
    </div>
</div>
<!-- CLOSE MAIN BODY-->
</body>
</html>
