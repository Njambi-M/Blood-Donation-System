<?php 
require_once('connect.php');

$appointment_id = $_GET['appointment_id'];

$sql_delete = "DELETE FROM hospital_appointment WHERE appointment_id = '$appointment_id'";

if($connection->query($sql_delete))
{
    echo "<script>alert('Appointment Canceled');window.location.href = '../donor_page.php'</script>";
}else{
    echo "<script>alert('Failed to cancel appointment');window.location.href = '../hospital_appointment/donorViewAppointments.php'</script>";
}

?>
