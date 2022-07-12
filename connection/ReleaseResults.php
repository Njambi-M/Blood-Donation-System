<?php

include('connect.php');
session_start()??null;


$donation_id=$_GET['donation_id'];
if(isset($_POST['results'])){
         $donation_id=$_GET['donation_id'];
         $blood_group= $_POST['blood_group'];
         $Rh_type=$_POST['Rh_type'];
         $hepatitis_B= $_POST['hepatitis_B'];
         $hepatitis_C= $_POST['hepatitis_C'];
         $HIV= $_POST['HIV'];
         $Syphilis= $_POST['Syphilis'];
         $bacterial_contamination= $_POST['bacterial_contamination'];
         $t_lymphotropic_virus= $_POST['t_lymphotropic_virus'];


         $sql = "INSERT INTO test_results(donation_id, blood_group, Rh_type, hepatitis_B, hepatitis_C, HIV, Syphilis,
         bacterial_contamination, t_lymphotropic_virus) VALUES('$donation_id', '$blood_group', '$Rh_type', '$hepatitis_B', 
         '$hepatitis_C', '$HIV', '$Syphilis', '$bacterial_contamination', '$t_lymphotropic_virus' )";

if ($connection->query($sql))
{
    $sql_update= "UPDATE donation SET results_status='released' WHERE donation_id=$donation_id";
    if ($connection->query($sql_update)){
        echo '<script>alert("Results successfully entered."); window.location.href ="../hospital_page.php" </script>';
    }
  else{
    echo mysqli_error($connection);

}
}else{
    echo mysqli_error($connection);
}

}
?>