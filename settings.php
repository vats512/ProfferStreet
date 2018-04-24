<?php
	ini_set("display_errors", "Off");
	error_reporting(-1);	
	$con=mysqli_connect("127.0.0.1","root","","de");
 	if(mysqli_connect_errno())
   	{
   		echo "Failed to connect to MySQL: " . mysqli_connect_error();
   	}
   	session_start();
?>
