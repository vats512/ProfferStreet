<?php
$cnt = 0;
require 'settings.php';
require 'header.php';
?>
<div class="container-fluid" id="product_display" style="padding-top: 35px">
<?php
	$run=mysqli_query($con,"select * from product");
	while($row=mysqli_fetch_assoc($run))
	{
?>
	<div class="col-sm-3 product">
		<div class="col-sm-12">
			<a class="fancybox" rel="group" href="images/<?php echo $row['name'];?>.jpg">
				<img src="images/<?php echo $row['name'];?>.jpg" class="img-thumbnail img-responsive product_img"/>
			</a>
		</div>
		<div class="col-sm-12">
			Name:<?= $row['name'];?>
		</div>
		<div class="col-sm-12">
			Base price<?= $row['base_price'];?>
		</div>
		<div class="col-sm-12">
			Maximum selling price:<?= $row['max_sell_price'];?>
		</div>
		<div class="col-sm-12 lr0pad">
			<div class="col-sm-6">
				Desc:<?php echo mb_strimwidth($row['description'], 0, 15, "..."); ?>
			</div>
			<div class="col-sm-6 fright">
				<a href="viewproduct.php?i=<?php echo $row['id']; ?>">
					<button class="btn btn-success col-sm-12">
						View Product
						<span class="glyphicon glyphicon-share-alt"></span>
					</button>
				</a>
			</div>
		</div>
	</div>
<?php
$cnt++;
}
?>
</div>