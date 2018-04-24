<?php
	include 'settings.php';
	$n=$_GET['k'];
	$m=$_SESSION['user_id'];
	$run1=mysqli_query($con,"select * from user where id='$m'");
	while($row=mysqli_fetch_assoc($run1))
	{
		$sh=$row['shortlist'];
		$kn=$sh.",".$n;
		$o=$row['id'];
		$run2=mysqli_query($con,"update user set shortlist='$kn' where id='$o'");
	}
?>