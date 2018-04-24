<?php
session_start();
$i=$_SESSION['user_id'];
$name=$_POST['name'];
$desc=$_POST['description'];
$price=$_POST['price'];
$cato=$_POST['category'];
$st1=$_POST['start_date'];
$st2=$_POST['start_time'];
$st3=$_POST['start_ampm'];
$start=$st1.$st2.$st3;
$end1=$_POST['end_date'];
$end2=$_POST['end_date'];
$end3=$_POST['end_ampm'];
$end=$end1.$end2.$end3;
require 'settings.php';
$run=mysqli_query($con,"insert into `product`(`id`,`name`,`base_price`,`seller_id`,`start_time`,`end_time`,`description`) 
										values ('','$name','$price','$i','$start','$end','$description')");
$info = pathinfo($_FILES['image']['tmp_name']);
$ext='jpg'; 
$newname = $name.".".$ext; 
$target = "images/".$newname;
move_uploaded_file( $_FILES['image']['tmp_name'], $target);

header("location:response.php");
?>
