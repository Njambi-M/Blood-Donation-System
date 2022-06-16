<?php
    include('connect.php');

    if(isset($_POST['donor_reg'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $donor_email = $_POST['donor_email'];
        $donor_phoneNo = $_POST['donor_phoneNo'];
        $donor_password = password_hash($_POST['donor_password'], PASSWORD_DEFAULT);
        $date_of_birth = date('Y-m-d', strtotime($_POST['date_of_birth']));
        $gender = $_POST['gender']; 
        
        $sql = "INSERT INTO donor(first_name, last_name, donor_email, donor_password, donor_phoneNo, gender, date_of_birth) 
        VALUES('$fname', '$lname', '$donor_email', '$donor_password', '$donor_phoneNo','$gender', '$date_of_birth')";

        if($connection->query($sql))
        {
            header('Location:../login.php');
        }
        else{
            header("location: ../donor_registration.php");
        }
    }
    else if(isset($_POST['hospital_reg'])){
        $hospital_name = $_POST['hospital_name'];
        $hospital_email = $_POST['hospital_email'];
        $hospital_phoneNo = $_POST['hospital_phoneNo'];
        $hospital_password = password_hash($_POST['hospital_password'], PASSWORD_DEFAULT);
        
        $sql_hospital = "INSERT INTO hospital(hospital_name, hospital_email, hospital_password, hospital_phoneNo) VALUES
        ('$hospital_name', '$hospital_email', '$hospital_password', '$hospital_phoneNo')";

        if($connection->query($sql_hospital))
        {
            header('Location:../login.php');
        }
        else{
            header("location: ../hospital_registration.php");
        }
    }
    else{
        echo "Data not found";
    }

    
   
?>