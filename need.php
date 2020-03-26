<?php
    $status = "รอรับบริจาค";
    require './server/server.php';
    $sql = "SELECT `need`, `piece`, `applicant`, `status` FROM save_med WHERE save_med.status = '$status' ";
    $result = mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>#SaveMed-WhatNeed</title>
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
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</head>

<body>
    <!-- แถบเมนูบาร์ -->
    <nav class="cyan" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.php" class="brand-logo white-text"><b>#SaveMed</b></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="need.php" class="white-text"><b>What Need</b></a></li>
                <li><a href="https://covidtracker.5lab.co/en" target="_blank" class="white-text"><b>Covid-19 Map</b></a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <br><br><br>
                <li><a href="index.php" class="black-text"><b>#SaveMed</b></a></li><br>
                <li><a href="need.php" class="black-text"><b>What Need</b></a></li><br>
                <li><a href="https://covidtracker.5lab.co/en" target="_blank" class="black-text"><b>Covid-19 Map</b></a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav><br>

    <div class="container">
        <h4>ตารางความต้องการ</h4>
        <h6><i style="color: red">*ในขณะนี้</i></h6>
        <br>
    </div>

    <!-- ส่วนของตาราง -->
    <div class="container">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th style="font-family: 'Itim', cursive;">สิ่งที่ต้องการ</th>
                    <th style="font-family: 'Itim', cursive;">จำนวนชิ้น</th>
                    <th style="font-family: 'Itim', cursive;">รายละเอียดผู้ขอ</th>
                    <th style="font-family: 'Itim', cursive;">สถานะปัจจุบัน</th>
                    <!-- <th style="font-family: 'Itim', cursive;">แก้ไข</th> -->
                </tr>
            </thead>

            <tbody>
                    <?php while ($row = mysqli_fetch_array($result)) {  ?>

                        <tr>
                            <td><?php echo $row['need'] ?></td>
                            <td><?php echo $row['piece'] ?></td>
                            <td><?php echo $row['applicant'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                        </tr>
                    <?php } ?>



                </tbody>
        </table>
    </div>

</body>

</html>