<?php
session_start()??null;

include('../connection/connect.php');

$id = $_SESSION['id']??null;

$sql = "SELECT hospital_id,hospital_name FROM hospital"; 

$result = $connection->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hospital Appointment Booking</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <link href = "https://code.jquery.com/ui/1.10.4/themes/blitzer/jquery-ui.css" rel = "stylesheet">
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <link href = "../css/styles.css" rel = "stylesheet">
       
    </head>
    <body>
    <script src = 'https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.21/build/jquery.datetimepicker.full.min.js'></script>
        <header>     
            <nav>
            <img id="logo" src="../images/Logo.png" width="80"height="80"> 
            <a href="../homepage.php" style="margin-left:15px;">Home</a> 

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
        <main>
            
            <br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-md-auto">
                   
                        <form class = 'box-shadow' id = 'book_appointment_form' method = 'POST' action = '../connection/HospitalAppointment.php' >
                            <h4 id = 'drive_scheduling_heading'>Hospital Appointment Booking</h4>
                            <label>Hospital</label>
                          <?php
                           if(mysqli_num_rows($result) > 0){  

                                echo "<select id='hospital' name='hospital'>" ;
                         
                         while($row = mysqli_fetch_assoc($result))
                         { 
                              echo  "<option value='" .$row['hospital_id']."'> ".$row['hospital_name']. "  </option>" ; 
                                 }
                                }else{ 
                                    echo "<div class = 'col'></div><div style = 'text-align:center; margin-top: 20px;margin-bottom: 371px'class = 'col-md-auto'><h5>No hospitals are currently available</h5></div><div class = 'col'></div>";
                                }
                               echo "</select>";    ?>
                            <br/><br/>
                            <label>Date</label>
                            <input type = 'date' name = 'app_date' id = 'app_date' required>
                            <br/><br/>
                            <label>Time</label>
                            <input type="time" id="app_time" name="app_time" required>
                            <br/><br/>
                            

                            <br/><br/>
                            <input id = 'submit' type = 'submit' name = 'bookApp' value = 'Book'>
                        </form>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
           
        </main>
        <footer>
            <p>&#169; Copyright. All Rights reserved</p>
        </footer>
    </body>
    
</html>