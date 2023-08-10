<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="neplore";

	$con=mysqli_connect($servername, $username, $password, $database);
	
	if (!$con){
		die("Connection failed");
	}
	
?> 