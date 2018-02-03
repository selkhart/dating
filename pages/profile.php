
<!-- Sarah Elkhart
    2/02/18
    profile.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/formStyles.css">
    <title>My Dating Website</title>
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

<!-- MAIN BODY -->
<div class="container">
    <div class="card mx-auto" id="mainBody">
        <div class="card-block">
            <h2>Profile</h2>
            <hr>
            <!-- OPEN FORM --> <!-- -->
            <form action="../dating/interests" method="post">
                <div class="row h-100">
                    <div class="col-md-6 justify-content-start" id="formBody">
                        <!-- EMAIL -->
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" aria-describedby="email" placeholder="Enter Email">
                        </div>
                        <!-- STATE -->
                        <div class="form-group">
                            <label for="inputState">State</label>
                            <select class="form-control" name="state" id="inputState">
                                <option value="WASHINGTON">WASHINGTON</option>
                            </select>
                        </div>
                        <!-- SEEKING -->
                        <div class="form-group">
                            <label>Seeking</label>
                            <br>
                            <div class="container" id="gender">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline" id="femaleGroup">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- BIOGRAPHY-->
                        <div class="form-group">
                            <label for="inputBiography">Biography</label>
                            <textarea class="form-control" id="inputBiography" rows="7"></textarea>
                        </div>
                        <!-- BUTTON -->
                        <div class="d-flex align-items-end justify-content-end w-100">
                            <button class="btn btn-primary">Next ></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>