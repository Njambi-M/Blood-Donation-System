<?php
session_start()??null;
include('../connection/connect.php');
$id=$_SESSION['id']??null;
$donor_id=$_GET['donor_id']??null;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Donation Details</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <link href = "https://code.jquery.com/ui/1.10.4/themes/blitzer/jquery-ui.css" rel = "stylesheet">
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link href = "../css/styles.css" rel = "stylesheet">
        <link rel="shortcut icon" href="..\images\Logo.png" type="image/x-icon">
       

    </head>

    <body>
 
        <header>     
        <nav>
            <img id="logo" src="../images/Logo.png" width="80"height="80"> 
            <a href="../hospital_page.php" style="margin-left:15px;">Home</a> 

                <a href = ''style = "float: right;margin-right: 20px; padding-top:20px;" class = 'dropdown-toggle password' id = 'user' data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>&nbsp;<?php echo $_SESSION['name']??null;?></a>

               <ul class="dropdown-menu" aria-labelledby="user">
                    <li><a id = 'user_profile'class="dropdown-item" href="#">My Profile</a></li>
                    <li><a id = 'log_out' class="dropdown-item" href="../connection/logout.php">Log Out</a></li>
                </ul>
            </nav>
        </header>
        <div class="sidenav box-shadow">
            <a href="../blood_drive/drive_scheduling.php">Schedule a drive</a>
            <a href="../blood_drive/driveHospitalView.php">Scheduled drives</a>
            <a href="../blood_drive/hospital_drive.php">Drive bookings and donations</a>
            <a href="../hospital_appointment/hospitalViewPendingAppointment.php">Pending hospital appointments</a>
            <a href="../hospital_appointment/hospitalViewConfirmedAppointment.php">Confirmed hospital appointments</a>
            <a href="hospitalViewDonationDetails.php">View donation details</a>
            <a href="hospitalViewDonations.php">View donations</a>
            <a href="../test_results/HospitalViewReleasedResults.php">View Blood Test Results</a>
        </div>
        <main class="main">
            <div class="container">
                <div class="row">
        
               
                <div class="col-md-auto">
                    <form action="../connection/blood_details.php?hospital_id=<?php echo $id;?>" class = 'box-shadow' id = 'donation_details_form' method = 'POST'>
                    <h4 id = 'blood_details_heading'>Enter Donor Details</h4>
                            <label for="donor_id">Donor ID</label>
                            <input readonly type = 'number' name = 'donor_id' value = '<?php echo $donor_id;?>' id = 'donor_id' required autofocus autocomplete = 'off'>
                            <br/><br/>
                            <label for="weight">Donor Weight(kg)</label>
                            <input type = 'number' name = 'weight' id = 'weight' required autofocus autocomplete = 'off'>
                            <br/><br/>
                            <label for="hb">Haemoglobin Levels(g/dL)</label>
                            <input type = 'number' name = 'hb' id = 'hb' required autofocus autocomplete = 'off'>
                            <br/><br/>
                            <label for="bp">Blood Pressure(mmHg)</label>
                            <input type = 'number' name = 'bp' id = 'bp' required autofocus autocomplete = 'off'>
                            <br/><br/>
                            <label for="pulse">Pulse(bpm)</label>
                            <input type = 'number' name = 'pulse' id = 'pulse' required autofocus autocomplete = 'off'>
                            <br/><br/>
                            <label for="eligible">Eligibility Status</label>
                            <select id='eligible_status' name='eligibility_status'>
                            <option value="eligible">Eligible</option>
                            <option value="not-eligible">Not eligible</option>
                            </select>
                            <br/><br/>
                            <div id="status_reason" style="display:none;">
                            <label for="reason">Reason</label>
                            <input type = 'text' name = 'reason' id = 'reason' autofocus autocomplete = 'off'>
                            </div>
                            <br/><br/>
                            <input id = 'submit' type = 'submit' name = 'ddetails' value = 'Save'>

        </form>
        </div>
        </div>

        </div>
        
</main>
<footer>
            <p>&#169; Copyright. All Rights reserved</p>
        </footer class = 'sidenav_footer'>
        <script>
           $("#eligible_status").change(function() {
  if ($(this).val() == "not-eligible") {
    $('#status_reason').show();
    $('#reason').attr('required', '');
    $('#reason').attr('data-error', 'This field is required.');
  } else {
    $('#status_reason').hide();
    $('#reason').removeAttr('required');
    $('#reason').removeAttr('data-error');
  }
});
            </script>

    </body>
    
</html>