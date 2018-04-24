<?php
	include 'header.php';
	require 'settings.php';
?>
<div class="container">
<?php
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pword'];
		$uname=$_POST['uname'];
		$cont=$_POST['contact'];
		
		$sql =mysqli_query($con,"insert into `user` values('','$name','$email','$pass','$cont','$uname','','') ");
    	$last_id = mysqli_insert_id($con);
		$info = pathinfo($_FILES['image']['tmp_name']);
		$ext='jpg'; 
		$newname = $email.".".$ext; 
		$target = "propic/".$newname;
		move_uploaded_file( $_FILES['image']['tmp_name'], $target);
    	$_SESSION['user_id'] = $last_id;
		
		?>
		<h2>Registered successfully!</h2>
		<p><a href="profile.php">ALpha</a></p>
		<?php
	}
	else{
		header("Location: index.php");
	}
?>
