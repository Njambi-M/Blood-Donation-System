<?php
    $servername = "localhost";
	$user = "Mnjambi";
	$password = "YouarelovedbyGod0";
	$database = "blood_donation";
	
	$connection = new mysqli($servername, $user, $password, $database) or die("Not connected".$connection->error);
?>