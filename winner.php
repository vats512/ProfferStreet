<?php
	include 'settings.php';
	$k = $_POST['id'];
	$vis = $_SESSION['user_id'];
	$runner=mysqli_query($con,"select max(current_bid) as c,bidder_id from bid where product_id='$k'");
	
	while($rower=mysqli_fetch_assoc($runner))
	{
		$vis=$rower['bidder_id'];
		$runner1=mysqli_query($con,"select * from user where id='$vis'");
		while($rower2=mysqli_fetch_assoc($runner1))
		{
			$mm=$rower2['email'];
			echo "<b>Winning bid: ".$rower2['c'];
			echo "<b><h3>".$rower2['name']."</b></h3><br>";
			echo "<img src=propic/".$mm.".jpg alt='image' height='100px' width='100px'>";
		}
	}
?>