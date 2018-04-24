<?php
	require 'settings.php';
	$msp = $_POST['msp'];
	$id = $_POST['id'];
	
	$run=mysqli_query($con,"update product set `max_sell_price`='$msp' where `id`='$id'");
	echo TRUE;
	?>