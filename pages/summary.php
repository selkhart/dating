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
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>Name: </td>
                        </tr>
                        <tr>
                            <td>Gender: </td>
                        </tr>
                        <tr>
                            <td>Age: </td>
                        </tr>
                        <tr>
                            <td>Phone: </td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                        </tr>
                        <tr>
                            <td>State: </td>
                        </tr>
                        <tr>
                            <td>Seeking: </td>
                        </tr>
                        <tr>
                            <td>Interests: </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <!--CHANGED ID FROM accountImg-->
                    <img class="mx-auto" src="../images/profilePic.png" alt="generic picture" id="profilePic">
                    <!-- BIOGRAPHY -->
                    <div class="container justify-content-center text-center">
                        <h3>Biography</h3>
                        <p id="bio">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type and scrambled it to
                            make a type specimen book. It has survived not only five centuries, but
                            also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets
                            containing Lorem Ipsum passages, and more recently with desktop publishing
                            software like Aldus PageMaker including versions of Lorem Ipsum.

                        </p>
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