<?php
	include 'settings.php';
		
	$search = $_POST['search'];
	$sql = "SELECT id,name FROM product WHERE name LIKE '$search%' LIMIT 4";
	$run=mysqli_query($con,$sql);

	while($row=mysqli_fetch_assoc($run))
	{?>
		<a href="viewproduct.php?i=<?= $row['id'];?>"><li class="text-large"><img src="images/<?= $row['name'];?>.jpg" class="img-thumbnail search_thumbnail"/><?= $row['name'];?></li></a>
	<?php
}
?>