<?ob_start();?>

<?php 
    require './../server/server.php';
   $id = $_GET['333'];
    $sql = "DELETE FROM `save_med` WHERE id = '$id' ";
    if(mysqli_query($connect, $sql)){
        echo "<script>alert('ลบข้อมูลเรียบร้อยค่ะ');</script>";
        header("location:admin_page.php"); 
        exit();
    }else{
        echo "<script>alert('ไม่สามารถลบข้อมูลได้ค่ะ');history.back();</script>";
        exit();
    }
?>