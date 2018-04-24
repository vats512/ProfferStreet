<?php
	require 'settings.php';

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$email=$_POST['email'];
		$password=$_POST['pword'];
		$run=mysqli_query($con,"select `email`,`password`,`id`,`status` from `user` where `email`='$email'");
		$row=mysqli_fetch_assoc($run);
		$pass=$row['password'];
		$id=$row['id'];

		if($pass==$password)
		{
			if($row['status']==1)
			{
				$_SESSION['user_id']=$id;
				header("Location: profile.php");
			}
			elseif($row['status']==2)
			{
				$_SESSION['user_id']=$id;
				header("Location: expertpro.php");
			}
			else
			{
				header("Location: signin.php");
			}
		}
		else
		{
			header("Location: signin.php");
		}

	}
?>