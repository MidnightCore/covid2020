<!DOCTYPE html>
<html lang="en">

<head>
    <title>ตารางความต้องการ</title>
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
            <a id="logo-container" href="index.php" class="brand-logo white-text"><b>Home</b></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="need.php" class="white-text"><b>ตารางความต้องการ</b></a></li>
                <li><a href="https://covidtracker.5lab.co/en" target="_blank" class="white-text"><b>Covid-19 Map</b></a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="need.php" class="black-text"><b>ตารางความต้องการ</b></a></li>
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
                <tr>
                    <td>ฟองน้ำ</td>
                    <td>400</td>
                    <td>ภาควิชาวิสัญญีวิทยา
                        คณะแพทยศาสตร์ศิริราชพยาบาล
                        บางกอกน้อย กทม 10700
                    </td>
                    <td>รอรับบริจาค</td>
                    <!-- <td>
                        <a href="#">
                            <button type="submit" class="btn cyan accent-4-effect cyan accent-4-light">แก้ไข
                                <i class="material-icons right">border_color</i>
                            </button>
                        </a>
                    </td> -->
                </tr>

            </tbody>
        </table>
    </div>

</body>

</html>