<!DOCTYPE html>
<html>
    <head>
        <title>Forgot Password</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script type="text/javascript" src = "scripts/validate.js"></script>
        <link href = "css/styles.css" rel = "stylesheet">
       
    </head>
    <body>
        <header>     
            <nav>
                <a href="#">HOME</a>
                <a style = "float: right;margin-right: 20px;"href = ""><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>&nbsp;</a>
            </nav>
        </header>
        <main>
            <br><br><br>
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                    <div class="col-5">
                        <form class = 'box-shadow' id = 'login_form' method="post" action = "connection/changePasswordConnect.php">
                            <p id = 'message'></p>
                            <h5 id = 'login_heading'>Change Password</h5>
                            <label>Email Address</label>
                            <input type = 'email' name = 'email' id = 'email' required autofocus autocomplete = 'off'>
                            <br/><br/><br>
                            <label>Password</label>
                            <input type = 'password' name = 'password' id = 'password' required autocomplete = 'off'>                            
                            <br/><br/>
                            <input id = 'login'type = 'submit' name = 'login_btn' value = 'Change Password'><br/><br>
                        </form>
                      
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </main>
         <footer style = 'margin-top:64px'>
            <p>&#169; Copyright. All Rights reserved</p>
        </footer>
    </body>
</html>
