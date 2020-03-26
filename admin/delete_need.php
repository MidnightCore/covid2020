<?php 
    require './../server/server.php';
   $id = $_GET['333'];
    $sql = "DELETE FROM `save_med` WHERE id = '$id' ";
    if(mysqli_query($contact, $sql)){
        // header("location:admin_page.php?alert=1");    
        exit();
    }else{
        // header("location:admin_page.php?alert=2");    
        exit();
    }
?>