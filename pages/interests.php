<!-- Sarah Elkhart
    2/02/18
    interests.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/formStyles.css">
    <title>Interests</title>
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
    <!-- MAIN BODY-->
    <div class="card mx-auto" id="mainBody">
        <div class="card-block">
            <h2>Interests</h2>
            <hr>
            <form action="../dating/summary" method="post">
                <div class="row h-100">
                    <div class="col-md-11 justify-content-start" id="formInfo">
                        <!-- INDOOR ACTIVITIES -->
                        <div class="form-group">
                            <label>Indoor Interests</label>
                            <div class="row">
                              <!-- COL 1-->
                                <div class="col-md-3">
                                    <!-- TV -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="tv">
                                        <label class="form-check-label" for="tv">
                                            tv
                                        </label>
                                    </div>
                                    <!-- PUZZLES -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="puzzles">
                                        <label class="form-check-label" for="puzzles">
                                            puzzles
                                        </label>
                                    </div>
                                </div>
                                <!-- COL 2 -->
                                <div class="col-md-3">
                                    <!-- MOVIES -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="movies">
                                        <label class="form-check-label" for="tv">
                                            movies
                                        </label>
                                    </div>
                                    <!-- READING -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="reading">
                                        <label class="form-check-label" for="puzzles">
                                            reading
                                        </label>
                                    </div>
                                </div>
                                <!-- COL 3-->
                                <div class="col-md-3">
                                    <!-- COOKING -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="cooking">
                                        <label class="form-check-label" for="tv">
                                            cooking
                                        </label>
                                    </div>
                                    <!-- PLAYING CARDS -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="playing cards">
                                        <label class="form-check-label" for="puzzles">
                                            playing cards
                                        </label>
                                    </div>
                                </div>
                                <!-- COL 4 -->
                                <div class="col-md-3">
                                    <!-- BOARD GAMES -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="board games">
                                        <label class="form-check-label" for="tv">
                                            board games
                                        </label>
                                    </div>
                                    <!-- VIDEO GAMES -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="video games">
                                        <label class="form-check-label" for="puzzles">
                                            video games
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- OUTDOOR ACTIVITIES -->
                        <div class="form-group">
                            <label>Out-door Interests</label>
                            <div class="row">
                                <!-- COL 1 -->
                                <div class="col-md-3">
                                    <!-- HIKING -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="hiking">
                                        <label class="form-check-label" for="tv">
                                            hiking
                                        </label>
                                    </div>
                                    <!-- WALKING -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="walking">
                                        <label class="form-check-label" for="puzzles">
                                            walking
                                        </label>
                                    </div>
                                </div>
                                <!-- COL 2 -->
                                <div class="col-md-3">
                                    <!-- BIKING -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="biking">
                                        <label class="form-check-label" for="tv">
                                            biking
                                        </label>
                                    </div>
                                    <!-- CLIMBING -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="climbing">
                                        <label class="form-check-label" for="puzzles">
                                            climbing
                                        </label>
                                    </div>
                                </div>
                                <!-- COL 3-->
                                <div class="col-md-3">
                                    <!-- SWIMMING -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="swimming">
                                        <label class="form-check-label" for="tv">
                                            swimming
                                        </label>
                                    </div>
                                </div>
                                <!-- COL 4-->
                                <div class="col-md-3">
                                    <!-- COLLECTING -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="collecting">
                                        <label class="form-check-label" for="tv">
                                            collecting
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="d-flex align-items-end justify-content-end h-100 w-100">
                            <a href="summary.php" class="btn btn-primary mx-auto mb-5">Next > </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>