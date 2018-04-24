<?php
	include 'header.php';
	$k=$_GET['i'];
	require 'settings.php';
?>
<script type="text/javascript" src="js/bid.js"></script>
<script src="js/timer.js"></script>
<div class="col-sm-5" id="view_product" style="padding-top: 30px;padding-left: 30px; z-index: 100000">
<?php
	$run=mysqli_query($con,"select * from `product` where `id`='$k'");
	while($row=mysqli_fetch_assoc($run))
	{
	?>
		<div class="col-sm-12">
			<div class="col-sm-8">
				<img src="images/<?= $row['name'];?>.jpg" class="img-thumbnail img-rounded img-responsive product_main_img"/>
			</div>
		</div>
		<div class="clearfix"></div><br/>
		<div class="col-sm-12" style="color: black">
			<div class="col-sm-12 lr0pad">
				<div class="col-sm-12 lr0pad">
					<div class="col-sm-5">
						<span class="h4 text-right"><strong>Product Name:</strong></span>
					</div>
					<div class="col-sm-7">
						<span><?= $row['name'];?></span>
					</div>
				</div>
				<div class="col-sm-12 lr0pad">
					<div class="col-sm-5">
						<span class="h4 text-right"><strong>Base Price:</strong></span>
					</div>
					<div class="col-sm-7">
						<span><?= $row['base_price'];?></span>
					</div>
				</div>
				<div class="col-sm-12 lr0pad">
					<div class="col-sm-5">
						<span class="h4 text-right"><strong>Maximum selling price:</strong></span>
					</div>
					<div class="col-sm-7">
						<span><?= $row['max_sell_price'];?></span>
					</div>
				</div>
				<div class="col-sm-12 lr0pad">
					<div class="col-sm-5">
						<span class="h4 text-right"><strong>Description:</strong></span>
					</div>
				</div>
				<div class="col-sm-12 lr0pad">
					<div class="col-sm-12">
						<span><?= $row['description'];?></span>
					</div>
				</div>
			</div>	
		</div>
		<br/><br/>
		<br/><br/><br/><br/>
		
	
</div>
<div class="col-sm-6">
	<h1>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCurrent top 5</h1><br/>
	
		<div id="time" style="float:right">
			Click here to start the auction,notice that you will have 10 seconds for bidding.
			<h1><span><input type="button" id="start_now" value="start bid now" class="btn btn-success"></h1>
			<h1><span>&#8987</span><span id="minutes">Timer</span>:<span id="seconds"></span></h1>
		</div>
		<div class="disperse col-sm-10 col-sm-offset-2" style="display:none">
			<div class="form-group col-sm-5">
				<input class="form-control" type="number" id="bid_amt" placeholder="Enter Amount"/>
			</div>
			<div class="col-sm-2">
				<button id="bid_now" class="btn btn-success">
					Bid Now
				</button>
			</div>
		</div><br/>
	<div id="highest_bid" class="col-sm-offset-2 col-sm-10"></div><br>	
	
</div><br/><br/>
<a style="cursor: pointer" data-toggle="modal" data-target="#timer_modal" id="modal_trigger" style="display: none"></a>
<div class="modal fade" id="timer_modal" style="margin-top:200px;z-index:1000000000" role="dialog">
  <div class="modal-dialog">
	<div class="modal-content" style="height: 400px">
	  <div class="modal-header" style="background-color: #0da3e2">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Winner of the auction!!!!</h4>
	  </div>
	  <div class="modal-body text-center">
		<div id="winner">
		  <div id="track_status_div">
			<img src="img/small_loader.gif" style="display: none"/>
			<span class="h4" id="track_status" style="display: none"></span>
		  </div>
		  <br/><br/><br/><br/>
		</div>
	  </div>
	</div>
  </div>
 <input type="hidden" id="prod_id" value="<?= $k;?>"/>
 <?php
	}
?>