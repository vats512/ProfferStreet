<?php
	include 'settings.php';
	$n=$_GET['k'];
	$m=$_SESSION['user_id'];
	$run1=mysqli_query($con,"select * from user where id='$m'");
	while($row=mysqli_fetch_assoc($run1))
	{
		$sh=$row['shortlist'];
		$array = explode(',',$sh);
		$flip = array_flip($array);
		unset($flip[$n]);
		$array = array_flip($flip);
		$s = implode(',',$array);
		$o=$row['id'];
		echo "update user set shortlist='$s' where id='$o'";
		$run2=mysqli_query($con,"update user set shortlist='$s' where id='$o'");
	}
?>