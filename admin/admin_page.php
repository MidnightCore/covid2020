<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../css/font.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>

</head>

<body>
    <!-- แถบเมนูบาร์ -->
    <nav class="cyan" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="admin_page.php" class="brand-logo white-text"><b>Admin</b></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../need.php" target="_blank" class="white-text"><b>Go to - What Need</b></a></li>
                <li><a href="../index.php" class="white-text"><b>Logout</b></a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="../need.php" target="_blank" class="black-text"><b>Go to - What Need</b></a></li>
                <li><a href="../index.php" class="black-text"><b>Logout</b></a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>


    <div class="container">
        <br>
        <div class="row">
            <div class="col 6">
                <h4>ตารางความต้องการทั้งหมด</h4>
            </div>
            <br>
        </div>

        <table class="responsive-table">
            <thead>
                <tr>
                    <th style="font-family: 'Itim', cursive;">สิ่งที่ต้องการ</th>
                    <th style="font-family: 'Itim', cursive;">จำนวนชิ้น</th>
                    <th style="font-family: 'Itim', cursive;">รายละเอียดผู้ขอ</th>
                    <th style="font-family: 'Itim', cursive;">สถานะปัจจุบัน</th>
                    <th style="font-family: 'Itim', cursive;">แก้ไข</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) {  ?>
                    <tr>
                        <td><?php echo $row['need'] ?></td>
                        <td><?php echo $row['piece'] ?></td>
                        <td><?php echo $row['applicant'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                        <td>
                            <a href="#">
                                <button type="submit" class="btn cyan accent-4-effect cyan accent-4-light">แก้ไข
                                    <i class="material-icons right">border_color</i>
                                </button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
        <br><br><br>
    </div>
</body>

</html>