<?php
session_start();
session_destroy();
$palm = 0;
if (isset($_GET['alert'])) {
    $palm = $_GET['alert'];
}
if ($palm == 1) {
    echo "<script>alert('username หรือ password ผิดค่ะ');history.back();</script>";
} else if ($palm == 2) {
    echo "<script>alert('คุณไม่มีสิทธิ์เข้าถึงค่ะ');history.back();</script>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>#SaveMed Admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/font.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <!--  Scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

    <style>
        body {
            background-image: url("img/pic3.jpg");
            background-size: cover;
            width: 100vw;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row"><br><br><br>
            <form action="login_form.php" method="POST">
                <div class="row">
                    <div class="col s12 m6 offset-m3">
                        <div class="card center-align mg">
                            <div class="card-content"><br>
                                <span class="card-title">
                                    <h4>#SaveMed Admin</h4>
                                </span><br>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">healing</i>
                                                <input type="text" id="username-input" name="em_User" class="validate">
                                                <label for="username-input">Username</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">lock</i>
                                                <input type="password" id="password-input" name="em_Password" class="validate">
                                                <label for="password-input">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <button type="submit" class="btn pulse waves-effect waves-light cyan accent-4" name="action">Login
                                    <i class="material-icons right">done</i>
                                </button> -->
                                <button type="submit" class="btn pulse waves-effect waves-light cyan accent-4">Login
                                    <i class="material-icons right">done</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>