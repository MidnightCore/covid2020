<?php
$status = "รอรับบริจาค";
require './server/server.php';
$sql = "SELECT `need`, `piece`, `place`, `applicant`, `contact`,`status` FROM save_med WHERE save_med.status = '$status' ";
$result = mysqli_query($connect, $sql);
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

    <style>
        th , td{
            text-align :center;
            font-family:'Itim', cursive;
        }
    </style>

</head>

<body>
    <!-- แถบเมนูบาร์ -->
    <nav class="cyan" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.php" class="brand-logo white-text"><b>#SaveMed</b></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="need.php" class="white-text"><b>What Need ?</b></a></li>
                <li><a href="https://covidtracker.5lab.co/" target="_blank" class="white-text"><b>Covid-19 Map (By⚡5Lab)</b></a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <br>
                <h2 style="text-align: center" class="black-text">#SaveMed</h2>
                <h5 style="text-align: center" class="black-text">Web Application</h5>
                <h5 style="text-align: center" class="black-text">ประชาสัมพันธ์การบริจาค</h5>
                <h5 style="text-align: center" class="black-text">เพื่อสนับสนุนเจ้าหน้าที่</h5>
                <h5 style="text-align: center" class="black-text">และบุคลากรทางการแพทย์</h5><br>
                <h4 style="text-align: center" class="black-text">Menu</h4>
                <li><a href="index.php" class="black-text"><b>#SaveMed Homepage 💖</b></a></li>
                <li><a href="need.php" class="black-text"><b>📝 What Need ?</b></a></li>
                <li><a href="https://covidtracker.5lab.co/" target="_blank" class="black-text"><b>Covid-19 Map (By⚡5Lab)</b></a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
        </div>
    </nav><br>

    <div class="container">
        <h4>ตารางสิ่งที่รอรับบริจาค</h4>
        <h6><i style="color: red">*ในขณะนี้</i></h6>
        <br>
    </div>

    <!-- ส่วนของตาราง -->
    <div class="container">
        <table class="striped">
            <thead>
                <tr>
                    <th style="padding-right: 25px; padding-left: 25px">สิ่งที่ต้องการ</th>
                    <th>จำนวน(ชิ้น)</th>
                    <th style="padding-right: 75px; padding-left: 75px">ผู้ขอรับบริจาค</th>
                    <th style="padding-right: 75px; padding-left: 75px">ที่อยู่สำหรับจัดส่ง</th>
                    <th style="padding-right: 25px; padding-left: 25px">เบอร์ติดต่อ</th>
                    <th style="padding-right: 25px; padding-left: 25px">สถานะปัจจุบัน</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) {  ?>

                    <tr>
                        <td><?php echo $row['need'] ?></td>
                        <td><?php echo $row['piece'] ?></td>
                        <td><?php echo $row['applicant'] ?></td>
                        <td><?php echo $row['place'] ?></td>
                        <td><?php echo $row['contact'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                    </tr>
                <?php } ?>



            </tbody>
        </table>
    </div>
    <br><br><br>



    <!-- ส่วนของ footer -->
    <footer class="page-footer cyan accent-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">About Us</h5>
                    <p class="grey-text text-lighten-4">ทางสาขาวิศวกรรมคอมพิวเตอร์ มหาวิทยาลัยราชภัฏสวนสุนันทา ได้ร่วมมือกับ HomeSchoolTrip ในการจัดสร้างเว็บแอปพลิเคชันนี้ขึ้นมา</p>
                </div>
                <div class="col l6 s12">
                    <h5 class="white-text">Contacts</h5>
                    <ul>
                        <li>Website : <a class="white-text" href="http://www.ce.fit.ssru.ac.th/" target="_blank">สาขาวิชาวิศกรรมคอมพิวเตอร์ มหาวิทยาลัยราชภัฎสวนสุนันทา</a></li>
                        <li>Facebook : <a class="white-text" href="https://www.facebook.com/CE-SSRU-101947597890618" target="_blank">Computer Engineering SSRU</a></li>
                        <li>Youtube : <a class="white-text" href="https://www.youtube.com/channel/UCRz1y8LNlNtMke1o23ppmkw" target="_blank">CE@SSRU Channel</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container white-text">
                Made by : <a class="white-text text-lighten-3" href="login.php">Computer Engineering SSRU</a>
            </div>
        </div>
    </footer>

</body>

</html>