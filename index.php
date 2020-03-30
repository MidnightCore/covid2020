<!DOCTYPE html>
<html lang="en">

<head>
    <title>#SaveMed</title>
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
        .modal {
            width: 70% !important;
            height: 100% !important;
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
    </nav>



    <!-- ภาพแบนเนอร์ ภาพที่ 1 -->
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center white-text text-lighten-2"><br><b>Together We Can Fight</b></h1>
                <div class="row center">
                    <h5 class="header col s12 light">ขอเชิญชวนทุกท่าน ร่วมกันบริจาคหน้ากากอนามัยและอุปกรณ์การแพทย์</h5>
                </div>
                <!-- <div class="row center">
                    <a href="#" id="download-button" class="btn-large waves-effect waves-light cyan accent-4">Get Started</a>
                </div> -->
                <br><br>
            </div>
        </div>
        <div class="parallax"><img src="img/pic1.jpg" alt="Photo by Ashkan Forouzani on Unsplash"></div>
    </div><br><br>



    <!-- ส่วนของการเกริ่นนำ -->
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h5>เป้าหมายของ #SaveMed</h5>
                    <p class="left-align light">#SaveMed หวังให้เว็บไซต์ของเราเป็นสื่อกลางในการ "ประชาสัมพันธ์" การรับบริจาคให้กับทางโรงพยาบาลต่างๆ
                        ที่ขาดแคลนหน้ากากอนามัย และอุปกรณ์การแพทย์อยู่ในขณะนี้ โดยได้รวบรวมรายชื่อและรายละเอียดของทางโรงพยาบาลที่รับบริจาค
                        รวมทั้งช่องทางติดต่อกับทางโรงพยาบาลนั้นๆไว้<br>ทางเราจึงขอเชิญชวนให้ทุกท่าน<i style="color:red">ร่วมกันบริจาคให้กับโรงพยาบาล</i>ตามแต่สะดวกค่ะ</p>
                </div>
            </div>
        </div>
    </div>




    <!-- ส่วนของรายชื่อรับบริจาค จากโรงพยาบาล -->
    <div class="container">
        <h4>รายชื่อโรงพยาบาลที่รับบริจาค</h4>
        <h5><i style="color: red">*ในขณะนี้</i></h5>
        <br>
        <div class="row">

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var elems = document.querySelectorAll('.modal');
                    var instances = M.Modal.init(elems, options);
                });
                // Or with jQuery
                $(document).ready(function() {
                    $('.modal').modal();
                });
            </script>


            <!-- โรงพยาบาลบําราศนราดูร -->
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="img/bamrasnaradura.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content">
                        <h6><b>โรงพยาบาลบําราศนราดูร</b></h6>
                        <h6>รับบริจาคเพื่อสมทบทุน ซื้ออุปกรณ์ทางการแพทย์</h6>
                    </div>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">รายละเอียด</a>
                    <!-- Modal Structure -->
                    <div id="modal1" class="modal modal-footer">
                        <div class="modal-content">
                            <h4>โรงพยาบาลบําราศนราดูร</h4>
                            <img class="responsive-img" src="img/bamrasnaradura.jpg">
                            <!-- <p>A bunch of text</p> -->
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- โรงพยาบาลราชวิถี -->
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="img/rajvithi.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content">
                        <h6><b>โรงพยาบาลราชวิถี</b></h6>
                        <h6>รับบริจาคเพื่อสมทบทุน ซื้ออุปกรณ์ทางการแพทย์</h6>
                    </div>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal2">รายละเอียด</a>
                    <!-- Modal Structure -->
                    <div id="modal2" class="modal modal-footer">
                        <div class="modal-content">
                            <h4>โรงพยาบาลราชวิถี</h4>
                            <img class="responsive-img" src="img/rajvithi.jpg">
                            <!-- <p>A bunch of text</p> -->
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- โรงพยาบาลรามาธิบดี -->
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="img/rama.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content">
                        <h6><b>โรงพยาบาลรามาธิบดี</b></h6>
                        <h6>รับบริจาคเพื่อสมทบทุน ซื้ออุปกรณ์ทางการแพทย์</h6>
                    </div>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal3">รายละเอียด</a>
                    <!-- Modal Structure -->
                    <div id="modal3" class="modal modal-footer">
                        <div class="modal-content">
                            <h4>โรงพยาบาลรามาธิบดี</h4>
                            <img class="responsive-img" src="img/rama.jpg">
                            <!-- <p>A bunch of text</p> -->
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- โรงพยาบาลรามาธิบดี -->
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="img/rama2.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content">
                        <h6><b>โรงพยาบาลรามาธิบดี</b></h6>
                        <h6>รับบริจาคหน้ากากอนามัยสำหรับบุคคลากร (Surgical Grade N95)</h6>
                    </div>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal4">รายละเอียด</a>
                    <!-- Modal Structure -->
                    <div id="modal4" class="modal modal-footer">
                        <div class="modal-content">
                            <h4>โรงพยาบาลรามาธิบดี</h4>
                            <img class="responsive-img" src="img/rama2.jpg">
                            <!-- <p>A bunch of text</p> -->
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- โรงพยาบาลจุฬาลงกรณ์ -->
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="img/jura.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content">
                        <h6><b>โรงพยาบาลจุฬาลงกรณ์</b></h6>
                        <h6>รับบริจาคอาหารปรุงสำเร็จ อาทิเช่น ข้าวกล่อง/อาหารว่าง</h6>
                    </div>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal5">รายละเอียด</a>
                    <!-- Modal Structure -->
                    <div id="modal5" class="modal modal-footer">
                        <div class="modal-content">
                            <h4>โรงพยาบาลจุฬาลงกรณ์</h4>
                            <img class="responsive-img" src="img/jura.jpg">
                            <!-- <p>A bunch of text</p> -->
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- โรงพยาบาลจุฬาลงกรณ์ -->
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="img/jura2.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content">
                        <h6><b>โรงพยาบาลจุฬาลงกรณ์</b></h6>
                        <h6>รับบริจาคหน้ากากอนามัยสำหรับบุคคลากร (Surgical Grade N95)</h6>
                    </div>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal6">รายละเอียด</a>
                    <!-- Modal Structure -->
                    <div id="modal6" class="modal modal-footer">
                        <div class="modal-content">
                            <h4>โรงพยาบาลจุฬาลงกรณ์</h4>
                            <img class="responsive-img" src="img/jura2.jpg">
                            <!-- <p>A bunch of text</p> -->
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>



            <!-- โรงพยาบาลธรรมศาสตร์เฉลิมพระเกียรติ-->
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="img/tu.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content">
                        <h6><b>โรงพยาบาลธรรมศาสตร์</b></h6>
                        <h6>รับบริจาคเพื่อสมทบทุน ซื้ออุปกรณ์ทางการแพทย์</h6>
                    </div>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal7">รายละเอียด</a>
                    <!-- Modal Structure -->
                    <div id="modal7" class="modal modal-footer">
                        <div class="modal-content">
                            <h4>โรงพยาบาลธรรมศาสตร์เฉลิมพระเกียรติ</h4>
                            <img class="responsive-img" src="img/tu.jpg">
                            <!-- <p>A bunch of text</p> -->
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>



            <!-- โรงพยาบาลบันนังสตา-->
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="img/bunnang.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content">
                        <h6><b>โรงพยาบาลบันนังสตา</b></h6>
                        <h6>รับบริจาคหน้ากากอนามัยสำหรับบุคคลากร (Surgical Grade N95)</h6>
                    </div>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal8">รายละเอียด</a>
                    <!-- Modal Structure -->
                    <div id="modal8" class="modal modal-footer">
                        <div class="modal-content">
                            <h4>โรงพยาบาลบันนังสตา</h4>
                            <img class="responsive-img" src="img/bunnang.jpg">
                            <!-- <p>A bunch of text</p> -->
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>



            <!-- โรงพยาบาลมหาวิทยาลัยนเรศวร-->
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="img/nareasuan.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content">
                        <h6><b>โรงพยาบาลมหาวิทยาลัยนเรศวร</b></h6>
                        <h6>รับบริจาคหน้ากากอนามัยสำหรับบุคคลากร (Surgical Grade N95)</h6>
                    </div>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal9">รายละเอียด</a>
                    <!-- Modal Structure -->
                    <div id="modal9" class="modal modal-footer">
                        <div class="modal-content">
                            <h4>โรงพยาบาลมหาวิทยาลัยนเรศวร</h4>
                            <img class="responsive-img" src="img/nareasuan.jpg">
                            <!-- <p>A bunch of text</p> -->
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- โรงพยาบาลพระนั่งเกล้า-->
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="img/nungkao.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content">
                        <h6><b>โรงพยาบาลพระนั่งเกล้า</b></h6>
                        <h6>รับบริจาคหน้ากากอนามัยสำหรับบุคคลากร (Surgical Grade N95)</h6>
                    </div>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal10">รายละเอียด</a>
                    <!-- Modal Structure -->
                    <div id="modal10" class="modal modal-footer">
                        <div class="modal-content">
                            <h4>โรงพยาบาลพระนั่งเกล้า</h4>
                            <img class="responsive-img" src="img/nungkao.jpg">
                            <!-- <p>A bunch of text</p> -->
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- โรงพยาบาลยะรัง-->
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="img/yarung.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content">
                        <h6><b>โรงพยาบาลยะรัง</b></h6>
                        <h6>รับบริจาคหน้ากากอนามัยสำหรับบุคคลากร (Surgical Grade N95)</h6>
                    </div>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal11">รายละเอียด</a>
                    <!-- Modal Structure -->
                    <div id="modal11" class="modal modal-footer">
                        <div class="modal-content">
                            <h4>โรงพยาบาลยะรัง</h4>
                            <img class="responsive-img" src="img/yarung.jpg">
                            <!-- <p>A bunch of text</p> -->
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- โรงพยาบาลจิตเวชนครราชสีมาราชนครินทร์-->
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="img/nakornsri.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content">
                        <h6><b>โรงพยาบาลจิตเวชนครราชสีมาราชนครินทร์</b></h6>
                        <h6>รับบริจาคหน้ากากอนามัยสำหรับบุคคลากร (Surgical Grade N95)</h6>
                    </div>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal12">รายละเอียด</a>
                    <!-- Modal Structure -->
                    <div id="modal12" class="modal modal-footer">
                        <div class="modal-content">
                            <h4>โรงพยาบาลจิตเวชนครราชสีมาราชนครินทร์</h4>
                            <img class="responsive-img" src="img/nakornsri.jpg">
                            <!-- <p>A bunch of text</p> -->
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- โรงพยาบาลสงขลานครินทร์-->
            <div class="col s12 m4">
                <div class="card medium">
                    <div class="card-image">
                        <img src="img/songkla.jpg">
                        <!-- <span class="card-title">Card Title</span> -->
                    </div>
                    <div class="card-content">
                        <h6><b>โรงพยาบาลสงขลานครินทร์</b></h6>
                        <h6>รับบริจาคหน้ากากอนามัยสำหรับบุคคลากร (Surgical Grade N95)</h6>
                    </div>
                    <!-- Modal Trigger -->
                    <a class="waves-effect waves-light btn modal-trigger" href="#modal13">รายละเอียด</a>
                    <!-- Modal Structure -->
                    <div id="modal13" class="modal modal-footer">
                        <div class="modal-content">
                            <h4>โรงพยาบาลสงขลานครินทร์</h4>
                            <img class="responsive-img" src="img/songkla.jpg">
                            <!-- <p>A bunch of text</p> -->
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">ปิด</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>




    <!-- ภาพแบนเนอร์ ภาพที่ 2 -->
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h3 class="header col s12 light">How to take care?</h3>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="img/pic2.jpg" alt="Photo by Kelly Sikkema on Unsplash"></div>
    </div>



    <!-- ส่วนของการแนะนำ -->
    <div class="container">
        <div class="section">
            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center cyan-text"><i class="material-icons">transfer_within_a_station</i></h2>
                        <h5 class="center">Social Distance</h5>
                        <p class="light">Social Distance มีความสำคัญเป็นอย่างมากในการลดการแพร่ระบาดของ Covid-19
                            โดยในการพูดคุยกัน ฝอยละอองสามารถกระเด็นออกมาได้ในระยะ 1 เมตร
                            จึงมีคำแนะนำว่าควรวางตัวให้ห่างจากกัน 2 เมตร เพื่อเลี่ยงการติดต่อของโรค</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center cyan-text"><i class="material-icons">healing</i></h2>
                        <h5 class="center">Take Care Yourself</h5>
                        <p class="light">1. ออกกำลังกายอย่างสม่ำเสมอ<br>
                            2. หมั่นล้างมืออย่างถูกวิธี<br>
                            3. เลี่ยงการแตะหรือจับใบหน้า<br>
                            4. เลี่ยงการใกล้ชิดผู้มีอาการคล้ายไข้หวัด<br>
                            5. รับประทานอาหารที่มีประโยชน์ต่อสุขภาพ</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center cyan-text"><i class="material-icons">home</i></h2>
                        <h5 class="center">Stay Home</h5>
                        <p class="light">พยายามใช้เวลาอยู่ในบ้าน และเลี่ยงการออกไปนอกบ้านโดยไม่จำเป็น
                            เพื่อลดความเสี่ยงในการติดเชื้อจากผู้ติดเชื้อ และลดความเสี่ยงในการแพร่เชื้อสู่ผู้อื่นโดยไม่ตั้งใจ</p>
                    </div>
                </div>
            </div>
        </div>
    </div><br>




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
                Made by : <a class="white-text text-lighten-3" href="login.php" target="_blank">Computer Engineering SSRU</a>
            </div>
        </div>
    </footer>

</body>

</html>