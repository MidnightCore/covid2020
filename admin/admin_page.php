<?php
    // $status = "รอรับบริจาค";
    require './../server/server.php';
    $sql = "SELECT `id`, `need`, `piece`, `place`,`applicant`, `status` FROM save_med ";
    $result = mysqli_query($connect,$sql);
    $palm = 0;
if (isset($_GET['alert'])) {
    $palm = $_GET['alert'];
}
if ($palm == 1) {
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยค่ะ');</script>";
} else if ($palm == 2) {
    echo "<script>alert('ไม่สามารถเพิ่มข้อมูลได้ค่ะ');history.back();</script>";
} else if ($palm == 3) {
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อยแล้วค่ะ');</script>";
}else if ($palm == 4) {
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้ค่ะ');history.back();</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>#SaveMed Admin</title>
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
            <a id="logo-container" href="admin_page.php" class="brand-logo white-text"><b>Admin Page</b></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="../need.php" target="_blank" class="white-text"><b>Go to - What Need ?</b></a></li>
                <li><a href="../index.php" class="white-text"><b>Logout</b></a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <br><br><br>
                <li><a href="admin_page.php" class="black-text"><b>Admin Page</b></a></li><br>
                <li><a href="../need.php" target="_blank" class="black-text"><b>Go to - What Need ?</b></a></li><br>
                <li><a href="../index.php" class="black-text"><b>Logout</b></a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
        </div>
    </nav>


    <div class="container">
        <br>
        <div class="row">
            <div class="col 6">
                <h4>ตารางความต้องการทั้งหมด</h4>
            </div>
        </div>
        <a href="form_add_need.php">
            <button type="submit" class="btn waves-effect waves-light light-green accent-4">เพิ่มความต้องการ
                <i class="material-icons right">add</i>
            </button>
        </a><br><br>

        <table class="striped">
            <thead>
                <tr>
                    <th style="font-family: 'Itim', cursive;">สิ่งที่ต้องการ</th>
                    <th style="font-family: 'Itim', cursive;">จำนวน(ชิ้น)</th>
                    <th style="font-family: 'Itim', cursive;">ผู้ขอรับบริจาค</th>
                    <th style="font-family: 'Itim', cursive;">ที่อยู่สำหรับจัดส่ง</th>
                    <th style="font-family: 'Itim', cursive;">สถานะปัจจุบัน</th>
                    <th style="font-family: 'Itim', cursive;">แก้ไข</th>
                    <th style="font-family: 'Itim', cursive;">ลบ</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) {  ?>
                    <tr>
                        <td><?php echo $row['need'] ?></td>
                        <td><?php echo $row['piece'] ?></td>
                        <td><?php echo $row['applicant'] ?></td>
                        <td><?php echo $row['place'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                        <td>
                            <a href="form_edit_need.php?333=<?php echo $row['id'] ?>">
                                <button type="submit" class="btn waves-effect waves-light orange accent-4">แก้ไข
                                </button>
                            </a>
                        </td>
                        <td>
                            <a href="delete_need.php?333=<?php echo $row['id'] ?>">
                                <button type="submit" class="btn waves-effect waves-light red accent-4 "onclick="return confirm('คุณต้องการลบรายการนี้ ใช่หรือไม่ ?')">ลบ
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