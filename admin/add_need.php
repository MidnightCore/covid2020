<?php 
    require './../server/server.php';
    $need = $_POST['need'];
    $piece = $_POST['piece'];
    $place = $_POST['place'];
    $applicant = $_POST['applicant'];
    $contact = $_POST['contact'];
    $status = "รอรับบริจาค";
    $sql = "INSERT INTO `save_med` (`id`, `need`, `piece`, `place`, `applicant`, `contact`, `status`) 
            VALUES(NULL, '$need', '$piece', '$place', '$applicant', '$contact', '$status')";
            

    if(mysqli_query($connect, $sql)){
        header("location:admin_page.php?alert=1");    
        exit();
    }else{
      
        header("location:admin_page.php?alert=2");    
        exit();
    }
?>