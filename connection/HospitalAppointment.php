<?php

include('connect.php');
session_start()??null;
$donor_id = $_SESSION['id']??null;

if(isset($_POST['bookApp'])){
    if($donor_id??null != null){
    
        $hospital_id= $_POST['hospital'];
        $date= $_POST['app_date'];
        $time= $_POST['app_time'];

        $sql = "INSERT INTO hospital_appointment(donor_id, hospital_id, `date`, `time`) VALUES('$donor_id', '$hospital_id', '$date', '$time' )";
        
        if ($connection->query($sql))
        {
            echo '<script>alert("Appointment created."); window.location.href ="../donor_page.php" </script>';

        }else{
            echo mysqli_error($connection);

        }
    }else{
        echo '<script>alert("Please login first then book an appointment"); window.location.href="../login.php";
        </script>';
    }
}
if(isset($_POST['update'])){
    $appointment_id=$_GET['appointment_id'];
    $hospital_id= $_POST['hospital'];
    $date= $_POST['app_date'];
    $time= $_POST['app_time'];


        $sqlupdate = "UPDATE hospital_appointment set hospital_id= '$hospital_id', `date`= '$date', `time`='$time' WHERE appointment_id=$appointment_id";
        
        if ($connection->query($sqlupdate))
        {
            echo '<script>alert("Appointment updated."); window.location.href ="../hospital_appointment/donorViewAppointments.php" </script>';

        }else{
            echo mysqli_error($connection);

        }
  
  }
?>