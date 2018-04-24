<?php
 require 'settings.php';
 $run=mysqli_query($con,"select * from product");
 while($row=mysqli_fetch_assoc($run))
 {
			$k=$row['id'];
			$n="This is a very good piece of ".$row['name']." this can be used as ".$row['name']." If you are looking for a perfect".$row['name'].", you can trust the credential of the seller that it is a very nice piece of product. Provides authenticated and trustworthy products. Only on profferstreet. The auction starts at 5:00 PM and ends at 7:00 Pm GMT. Please participate and bid higher than maximum selling price.";
			$run1=mysqli_query($con,"update product set description='$n' where id='$k'");
 
 
 }
 
 
 ?>