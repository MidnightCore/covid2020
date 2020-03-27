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
                <br>
                <h2 style="text-align: center" class="black-text">#SaveMed</h2>
                <h5 style="text-align: center" class="black-text">Web Application</h5>
                <h5 style="text-align: center" class="black-text">ประชาสัมพันธ์การบริจาค</h5>
                <h5 style="text-align: center" class="black-text">เพื่อสนับสนุนเจ้าหน้าที่</h5>
                <h5 style="text-align: center" class="black-text">และบุคลากรทางการแพทย์</h5><br>
                <h4 style="text-align: center" class="black-text">Menu</h4>
                <li><a href="admin_page.php" class="black-text"><b>Admin Page 💻</b></a></li>
                <li><a href="../need.php" target="_blank" class="black-text"><b>Go to -📝 What Need ?</b></a></li>
                <li><a href="../index.php" class="black-text"><b>Logout 🚪</b></a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons white-text">menu</i></a>
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
            <form class="col s12" action="add_need.php" id="addrequest" method="POST">
                <div class="row">
                    <div class="input-field col s6">
                        <input name="need" id="need" type="text" class="validate" required>
                        <label for="need">สิ่งที่ต้องการ</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="piece" id="piece" type="number" class="validate" required>
                        <label for="piece">จำนวน(ชิ้น)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="applicant" id="applicant" type="text" class="validate" required>
                        <label for="applicant">ผู้ขอรับบริจาค</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="place" id="place" type="text" class="validate" required>
                        <label for="place">ที่อยู่สำหรับจัดส่ง</label>
                    </div>
                </div>
                <div class="row">
                    <!--  <div class="input-field col s6">
                        <select name="status" id="status" class="validate" required>
                            <option value="" disabled selected>สถานะปัจจุบัน</option>
                            <option value="1">รอรับบริจาค</option>
                            <option value="2">ได้รับบริจาคแล้ว</option>
                        </select>
                        <label for="status">เลือกสถานะ</label>
                    </div> -->
                    <div class="input-field col s6">
                        <input name="contact" id="contact" type="text" class="validate" required>
                        <label for="contact">เบอร์ติดต่อ</label>
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="center-align col s6">
                    <button type="submit" form="addrequest" class="btn waves-effect waves-light cyan accent-4">ยืนยัน
                        <i class="material-icons right">done</i>
                    </button>
                </div>
                <div class="center-align col s6">
                    <a href="admin_page.php">
                        <button type="button" class="btn waves-effect waves-light orange">ย้อนกลับ
                            <i class="material-icons right">reply</i>
                        </button>
                    </a>
                </div>
            </div><br><br><br><br><br><br><br><br><br>

        </div>
    </div>



    <!-- ส่วนของ footer -->
    <footer class="page-footer cyan accent-4">
        <div class="footer-copyright">
            <div class="container white-text">
                Made by : <a class="white-text text-lighten-3" href="login.php">Computer Engineering SSRU</a>
            </div>
        </div>
    </footer>
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