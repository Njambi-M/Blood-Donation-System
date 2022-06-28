<?php

include('connect.php');
session_start()??null;

if(isset($_POST['register'])){
    $drive_id = $_GET['id']??null;
    $user_id = $_SESSION['id']??null;

    if($user_id??null != null){

        $sql = "INSERT INTO drive_booking(donor_id, blood_drive_id) VALUES('$user_id', '$drive_id')";
        
        if ($connection->query($sql))
        {
            echo '<script>alert("Registration successful! See you then."); window.location.href ="../blood_drive/viewDrives.php" </script>';

        }else{
            echo "Failed to insert";
        }
    }
    else{
        echo '<script>alert("Please login then register for the drive"); window.location.href="../login.php";
        </script>';
    }
   
}
?>