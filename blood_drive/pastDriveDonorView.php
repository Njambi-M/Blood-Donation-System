<?php
session_start()??null;

include('../connection/connect.php');

$id = $_SESSION['id'];
$sqldrive = "SELECT blood_drive.blood_drive_id, blood_drive.blood_drive_name, blood_drive.blood_drive_location, 
blood_drive.date_from, blood_drive.date_to, drive_booking.* FROM drive_booking LEFT JOIN
blood_drive ON blood_drive.blood_drive_id = drive_booking.blood_drive_id WHERE donor_id = '$id' AND `status`='seen' ";
$resultdrive = $connection->query($sqldrive);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>View Appointments</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <link href = "https://code.jquery.com/ui/1.10.4/themes/blitzer/jquery-ui.css" rel = "stylesheet">
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <link href = "../css/styles.css" rel = "stylesheet">
        <link rel="shortcut icon" href="../images\Logo.png" type="image/x-icon">
        <script type="text/javascript" src = "../scripts/sidebar.js"></script>


        
       
    </head>
    <body>
        <header>     
        <nav>
            <img id="logo" src="../images/Logo.png" width="80"height="80"> 
            <a href="index.php" style="margin-left:15px;">Home</a> 
            <a href="../donation_requirements.php" style="margin-left:15px;">Eligibility</a> 
            <a href="../RegisteredHospitals.php" style="margin-left:15px;">Partnered Hospitals</a> 

                <a href = ''style = "float: right;margin-right: 20px; padding-top:20px;" class = 'dropdown-toggle password' id = 'user' data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>&nbsp;<?php echo $_SESSION['name'];?></a>

               <ul class="dropdown-menu" aria-labelledby="user">
                    <li><a id = 'user_profile'class="dropdown-item" href="#">My Profile</a></li>
                    <li><a id = 'log_out' class="dropdown-item" href="../connection/logout.php">Log Out</a></li>
                </ul>
            </nav>
        </header>
        <main class="donor_land">

        <div class="flex-shrink-1 p-3 bg-white" id="dash">
    <a href="../donor_page.php" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <span class="fs-5 fw-semibold">Dashboard</span>
    </a>
    <ul class="list-unstyled ps-0">
        <li class="mb-1">
    
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#donate-collapse" aria-expanded="false">
          Donate
        </button>
        <div class="collapse" id="donate-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="viewDrives.php" class="link-dark d-inline-flex text-decoration-none rounded">Register for Blood Drives</a></li>
            <li><a href="../hospital_appointment/book_appointment.php" class="link-dark d-inline-flex text-decoration-none rounded">Book Hospital Appointment </a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#appointment-collapse" aria-expanded="false">
          Appointments
        </button>
        <div class="collapse" id="appointment-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="../hospital_appointment/donorViewAppointments.php" class="link-dark d-inline-flex text-decoration-none rounded">Upcoming Appointments</a></li>
            <li><a href="../hospital_appointment/donorViewPastAppointments.php" class="link-dark d-inline-flex text-decoration-none rounded">Past Appointments</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#drive-collapse" aria-expanded="false">
          Blood Drives
        </button>
        <div class="collapse" id="drive-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="viewDrives.php" class="link-dark d-inline-flex text-decoration-none rounded">View Upcoming Drives</a></li>
            <li><a href="driveDonorView.php" class="link-dark d-inline-flex text-decoration-none rounded">View Registered Drives</a></li>
            <li><a href="pastDriveDonorView.php" class="link-dark d-inline-flex text-decoration-none rounded">View Attended Drives</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#donations-collapse" aria-expanded="false">
          Blood Donations
        </button>
        <div class="collapse" id="donations-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="../donate/donorDonationDetails.php" class="link-dark d-inline-flex text-decoration-none rounded">View Blood Details</a></li>
            <li><a href="../donate/donorTestResults.php" class="link-dark d-inline-flex text-decoration-none rounded">View Test Results</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>

        <div class="container" style = 'margin-bottom:115px'>
        <h2 style="text-align:center; margin-top:30px;">Attended Drives</h2> 

        <div class="cards-data">

        <?php
if (mysqli_num_rows($resultdrive) > 0)
{
    while($row = mysqli_fetch_assoc($resultdrive))
    {
        $drive_booking_id = $row['drive_booking_id'];
        ?>
        <div class="row">
        <div class="col-md-auto col-sm-6"> 
                    <div class="card">
                    <form action="../connection/deleteDriveBooking.php?drive_booking_id=<?php echo $drive_booking_id;?>" method="post" style='margin-top:10px;'>

                        <div class="card-body"> 
                                <div>
                                <h5 class="header-title mt-0 mb-4"><strong>Blood Drive Name:</strong> <?php echo $row['blood_drive_name']; ?></h5>
                                <h5 class="header-title mt-0 mb-4"><strong>Blood Drive Name: </strong><?php echo $row['blood_drive_location']; ?></h5>
                                <h5 class="header-title mt-0 mb-4"><strong>Date: </strong><?php echo date('Y-m-d',strtotime($row['date_from'])); ?> <strong>to</strong> <?php echo date('Y-m-d',strtotime($row['date_to'])); ?></h5>
                                <h5 class="header-title mt-0 mb-4"><strong>Time: </strong><?php echo date('h:i a',strtotime($row['date_from'])); ?> <strong>-</strong> <?php echo date('h:i a',strtotime($row['date_to'])); ?></h5>
                                </div>
                                <div style = 'text-align:center'>
                                
                            </div>
                        </div>
                        </form>
                       

                          <?php 
                        } 
                    }else{
                        echo "<div class = 'col'></div><div style = 'text-align:center; margin-top: 20px;margin-bottom:337px;'class = 'col-md-auto'><h5>You have not attended any blood drives</h5></div><div class = 'col'></div>";
                    }
        ?>
        </div>
        </div>

</div>
                </div>
                </div>
</main>
<footer>
            <p>&#169; Copyright. All Rights reserved</p>
        </footer>
</body>
<html>





    
