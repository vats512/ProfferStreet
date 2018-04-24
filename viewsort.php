<?php
	include 'settings.php';
	include 'header.php';
?>
<div style="padding-left: 20px; padding-right: 10px">
	<div class="row">
		<div class="col-sm-2">
			<p class="text-left h3"><strong>Image</strong></p>
		</div>
		<div class="col-sm-2">
			<p class="text-left h3"><strong>Name</strong></p>
		</div>
		<div class="col-sm-2">
			<p class="text-left h3"><strong>Base Price</strong></p>
		</div>
		<div class="col-sm-2">
			<p class="text-left h3"><strong>Max Sell Price</strong></p>
		</div>
		<div class="col-sm-2">
			<p class="text-left h3"><strong>Description</strong></p>
		</div>
		<div class="col-sm-2">
			<p class="text-left h3"><strong>View</strong></p>
		</div>
	</div>
<?php
	$m=$_SESSION['user_id'];	
	$run1=mysqli_query($con,"select * from user where id='$m'");
	while($row2=mysqli_fetch_assoc($run1))
	{
		$sh=$row2['shortlist'];
		$prod = explode(",", $sh);

		$cnt = 0;
		foreach ($prod as $id)
		{
			$run3=mysqli_query($con,"select * from product where id='$id'");
			$row = mysqli_fetch_assoc($run3);
			?>
			<br/>
				<div class="row sort_product">
					<div class="col-sm-2">
						<a class="fancybox" rel="group" href="images/<?php echo $row['name'];?>.jpg">
							<img src="images/<?php echo $row['name'];?>.jpg" class="img-rounded img-responsive listing_thumbnail"/>
						</a>
					</div>
					<div class="col-sm-2">
						<span><?= $row['name'];?></span>
					</div>
					<div class="col-sm-2">
						<span>&#8377 <?= $row['base_price'];?> /-</span>
					</div>
					<div class="col-sm-2">
						<span>&#8377 <?= $row['max_sell_price'];?> /-</span>
					</div>
					<div class="col-sm-3 lr0pad">
						<div class="col-sm-6">
							<span><?php echo mb_strimwidth($row['description'], 0, 70, "..."); ?></span>
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
					<div class="col-sm-1">
						<button class="btn btn-danger remove_short col-sm-12" rel="<?= $row['id'];?>"> 
							<span class="add_text pull-left" style="color: white">Remove </span>
							<span class="glyphicon glyphicon-minus"></span>
						</button>
					</div>
				</div>
				<div class="clearfix"></div>
			<?php
			$cnt++;
		}
	}
?>
<script>
	$(".remove_short").click(function()
	{
		$(this).parents(".sort_product").fadeOut("slow");
	});
</script>