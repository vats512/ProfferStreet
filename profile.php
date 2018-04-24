<?php
	include 'header.php';
	require 'settings.php';
	$product = array(
		'0' => array(
			'id' => '1',
			'name' => 'Hero Bycle',
			'status' => 'Packing',
			'class' => 'danger',
			'width' => '20%' ),
		
		
		'1' => array(
			'id' => '2',
			'name' => 'Vintage Car',
			'status' => 'Shipping',
			'class' => 'warning',
			'width' => '40%' ),

		'2' => array(
			'id' => '3',
			'name' => 'Samsung Tv',
			'status' => 'Shipped',
			'class' => 'primary',
			'width' => '60%' ),

		'3' => array(
			'id' => '4',
			'name' => 'Sylvester jacket',
			'status' => 'Delievering',
			'class' => 'info',
			'width' => '80%' ),

		'4' => array(
			'id' => '5',
			'name' => 'gramophone',
			'status' => 'Delievered',
			'class' => 'success',
			'width' => '100%' ),

		);
?>
<div class="container" style="padding: 10px; margin: 10px; width: 100%">
<?php
	#$user_id = $_SESSION['user_id'];
	$user_id = 1;
	$run=mysqli_query($con,"Select `name`,`email`,`password`,`id`,`status` from `user` where id = '$user_id'");
	$row=mysqli_fetch_assoc($run);

?>
	<div class="col-sm-12">
		<div class="col-sm-3">
			<img src="img/logo.jpg" class="img-responsive"/>
		</div>
		<div class="col-sm-6">
			<h1 class="text-center"><strong><?= $row['name'];?></strong></h1>
		</div>
	</div>
	<div class="container-fluid">
		<h3 class="text-center">Bid List</h3>
		<div class="col-sm-12 bg-primary">
			<div class="col-sm-3">
				<p class="h4">Product #</p>
			</div>
			<div class="col-sm-3">
				<p class="h4">Product Name</p>
			</div>
			<div class="col-sm-3">
				<p class="h4">Status</p>
			</div>
			<div class="col-sm-3">
				<p class="h4">View&nbspDetails</p>
			</div>
		</div>
		<div class="col-sm-12" style="padding-top: 10px; color: black">
			<?php foreach($product as $key => $item):?>
				<div class="col-sm-12 list_row">	
					<div class="col-sm-3">
						<p class="text-primary"><?= $item['id'];?></p>
					</div>
					<div class="col-sm-3">
						<p><?= $item['name'];?></p>
					</div>
					<div class="col-sm-3">
						<p><?= $item['status'];?></p>
						<div class="progress">
						  <div class="progress-bar progress-bar-<?= $item['class'];?> progress-bar-striped active" role="progressbar"
						  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?= $item['width'];?>">
						  </div>
						</div>

					</div>
					<div class="col-sm-3">
						<a href="view_details.php?id=<?= $item['id'];?>">
							<button class="btn btn-primary">
								View Details
								<span class="glyphicon glyphicon-list-alt"></span>
							</button>
						</a>
					</div>
				</div><br/><br/>
			<?php endforeach;?>
		</div>
	</div><br/>
	<a href="product.php">	
		<button class="btn btn-orange btn-lg fright">
			<span>Sell with us!</span>
		</button>
		</a>
</div>