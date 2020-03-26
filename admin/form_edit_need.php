<?php 
    require './../server/server.php';
    $id = $_GET['333'];
    $sql = "SELECT id,need,piece,place,applicant,contact,status FROM save_med WHERE id = '$id' ";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    // echo$id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Request</title>
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
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav><br><br>



    <!-- ส่วนของการเพิ่มข้อมูลคำขอรับบริจาค -->
    <div class="container">

        <div class="row">
            <div class="col 6">
                <h4>แก้ไขความต้องการ</h4>
            </div>
        </div>


        <div class="row">
            <form class="col s12" action="edit_need.php" id="addrequest" method="POST">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="need" id="need" type="text" class="validate" value="<?php echo$row['need'] ?>"required>
                        <label for="need">สิ่งที่ต้องการ</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="piece" id="piece" type="number" class="validate" value="<?php echo$row['piece'] ?>"required>
                        <label for="piece">จำนวน(ชิ้น)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="applicant" id="applicant" type="text" class="validate" value="<?php echo$row['applicant'] ?>"required>
                        <label for="applicant">ผู้ขอรับบริจาค</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="place" id="place" type="text" class="validate" value="<?php echo$row['place'] ?>"required>
                        <label for="place">ที่อยู่สำหรับจัดส่ง</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="status" id="status" class="validate" required>
                            <option value="" disabled selected>สถานะปัจจุบัน</option>
                            <option value="รอรับบริจาค">รอรับบริจาค</option>
                            <option value="ได้รับบริจาคครบแล้ว">ได้รับบริจาคครบแล้ว</option>
                        </select>
                        <label for="status">เลือกสถานะ</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="contact" id="contact" type="text" class="validate" value="<?php echo$row['contact'] ?>"required>
                        <label for="contact">เบอร์ติดต่อ</label>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>
            </form>

            <div class="center-align">
                <button type="submit" form="addrequest" class="btn waves-effect waves-light">ยืนยัน
                    <i class="material-icons right">done</i>
                </button>
            </div><br><br><br>

        </div>
        
    </div>
</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function() {
        $('select').formSelect();
    });
</script>