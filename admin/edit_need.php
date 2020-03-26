<?php 
    require './../server/server.php';
    $id = $_POST['id'];
    $need = $_POST['need'];
    $piece = $_POST['piece'];
    $place = $_POST['place'];
    $applicant = $_POST['applicant'];
    $contact = $_POST['contact'];
    $status = $_POST['status'];
    $sql = "UPDATE `save_med` SET `need`='$need',`piece`='$piece',`place`='$place',`applicant`='$applicant',`contact`='$contact',`status`='$status' WHERE `id` = '$id'";
    // echo$id;
            

    if(mysqli_query($connect, $sql)){
        
        header("location:admin_page.php?alert=3");    
        exit();
    }else{
    
        header("location:admin_page.php?alert=4");    
        exit();
    }
?>