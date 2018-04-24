<?php
	require 'settings.php';
	session_start();
	$bid = $_POST['bid_amt'];
	$id = $_SESSION['user_id'];
	$prod_id = $_POST['prod_id'];
	$runner=mysqli_query($con,"select max(current_bid) as c from bid where product_id='$prod_id'");
	while($roww=mysqli_fetch_assoc($runner))
	{
		$pr=$roww['c'];
	}
	if($bid>$pr)
	{
	$run=mysqli_query($con,"insert into bid values ('','$prod_id','$bid','$id')");
	}
	else{
		echo "<script>alert('Your bid is lowerr than current maximum bid');</script>";
	}
	$run1=mysqli_query($con,"select bidder_id, current_bid from bid where product_id='$prod_id' order by current_bid desc limit 5");
	?>
<div class="col-sm-12">
	<table class="table table-hover">
		<thead class="bg-gradient">
			<tr>
				<th>Bidder name</th>
				<th>Bid on product</th>
			</tr>
		</thead>
<?php	
	while($row=mysqli_fetch_assoc($run1))
	{		
			?>
				<tr>
					<td>
					<?php
						$po=$row['bidder_id'];
						$sql = mysqli_query($con,"select name from user where id='$po'");
						$k=mysqli_fetch_assoc($sql);
						echo $k['name'];
					?>
					</td>
					<td>&#8377 <?= $row['current_bid'];?> /-</td>
				</tr>
			<?php
		
	}
	?>
	</table>
</div>