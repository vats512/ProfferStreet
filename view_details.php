<?php
	include 'header.php';
	include 'settings.php';
	$user['name'] = "Manush";
	$id = $_GET['id'];
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
<script type="text/javascript">
	$(document).ready(function()
	{
		$('[data-toggle="tooltip"]').tooltip();
	});
	function foo()
	{
		$("#track_a").trigger('click');
	}
</script>
<br/><br/>
<div style="color: black">
<?php foreach($product as $key=>$order):?>
	<?php if($order['id']==$id):?>
		<div class="col-sm-3">
			<img src="images/<?= $order['name'];?>.jpg" class="img-responsive"/>
		</div>
		<div class="col-sm-offset-1 col-sm-4">
			<div class="col-sm-12">
				<div class="col-sm-6">
					<p class="h3">Order id: </p>
				</div>
				<div class="col-sm-6">
					<p class="h3"><?= $id;?></p>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="col-sm-6">
					<p class="h3">Product name: </p>
				</div>
				<div class="col-sm-6">
					<p class="h3"><?= $order['name'];?></p>
				</div>
			</div>
			<div class="clearfix"></div><br/>
			<div class="col-sm-6" style="margin-left: 15px">
				<div class="progress progress_tip tip_<?= $order['class'];?>" data-toggle="tooltip" data-placement="bottom" title="<?= $order['status'];?>" style="cursor: pointer">
					<div class="progress-bar progress-bar-<?= $order['class'];?> text-center" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?= $order['width'];?>">
					</div>
				</div>
			</div>
			<div class="clearfix"></div><br/>
			<div class="col-sm-12" style="margin-left: 15px">
				<p class="h3">The product will be delievered to you in 3 days.</p>
			</div>
		</div>
	<?php else:?>

	<?php endif;?>
<?php endforeach;?>
</div>
<div class="col-sm-12" style="margin-top: 50px;">
	<a href="profile.php">
		<button class="btn btn-info">
			&#8629 Back to Profile 
		</button>
	</a>
	<button class="btn btn-success" style="margin-left: 150px;" onclick="foo()">
		Track Order
	</button>
</div>