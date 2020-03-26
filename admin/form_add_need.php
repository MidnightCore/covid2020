<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Request</title>
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
                <h4>เพิ่มความต้องการ</h4>
            </div>
        </div>


        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">สิ่งที่ต้องการ</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">จำนวน(ชิ้น)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">ผู้ขอรับบริจาค</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">ที่อยู่สำหรับจัดส่ง</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select id="first_name" class="validate">
                            <option value="" disabled selected>สถานะปัจจุบัน</option>
                            <option value="1">รอรับบริจาค</option>
                            <option value="2">ได้รับบริจาคแล้ว</option>
                        </select>
                        <label for="first_name">เลือกสถานะ</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">เบอร์ติดต่อ</label>
                    </div>
                </div>
            </form>
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