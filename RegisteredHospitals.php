<?php
session_start()??null;

include('connection/connect.php');

$id = $_SESSION['id']??null;

$sql = "SELECT * FROM hospital";

$result = $connection->query($sql);

    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registered Hospitals</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <link href = "https://code.jquery.com/ui/1.10.4/themes/blitzer/jquery-ui.css" rel = "stylesheet">
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <script type="text/javascript" src = "scripts/validate.js"></script>
        <link href = "css/styles.css" rel = "stylesheet">
        <link rel="shortcut icon" href="images\Logo.png" type="image/x-icon">
        <script type="text/javascript" src = "scripts/sidebar.js"></script>

        
       
    </head>
    <body>
        <header>     
        <nav>
            <img id="logo" src="images/Logo.png" width="80"height="80"> 
            <a href="index.php" style="margin-left:15px;">Home</a> 
<?php
            if($id!==null){  ?>
            <a href="donor_page.php" style="margin-left:15px;">My dashboard</a> 

                <a href = ''style = "float: right;margin-right: 20px; padding-top:20px;" class = 'dropdown-toggle password' id = 'user' data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>&nbsp;<?php echo $_SESSION['name']??null;?></a>

               <ul class="dropdown-menu" aria-labelledby="user">
                    <li><a id = 'log_out' class="dropdown-item" href="connection/logout.php">Log Out</a></li>
                </ul>
                <?php
            } ?>
            </nav>
        </header>

 <main class="donor_land">
    <div class="container">
    <div class="container px-4 py-5" id="icon-grid">

    <h2 class="pb-2 border-bottom">Partnered Hospitals</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <?php
 if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {  ?>
    
          <div class="col d-flex align-items-start border-right">
            <div>
              <h4 class="fw-bold mb-0"><?php echo $row['hospital_name']?></h4><br>
              <p><?php echo $row['hospital_location']?></p>
              <p><?php echo $row['hospital_email']?></p>
              <p><?php echo $row['hospital_phoneNo']?></p>
            </div>
          </div>
           <?php
    }
}
?>
 </div>
          </div>
</div con>
</main>
</body>
<footer style="margin-top:140px;">
            <p>&#169; Copyright. All Rights reserved</p>
        </footer>
</html>
