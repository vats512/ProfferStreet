<?php
require 'settings.php';
include 'header.php';
?>
<script type="text/javascript" src="js/expert.js"></script>
<?php
$run=mysqli_query($con,"select * from product where max_sell_price=0");
while($row=mysqli_fetch_assoc($run))
{
?>
	<div class="expert_product" style="box-shadow: 5px 5px 5px gray">
		Name:<?=$row['name'];?><br>
		Image:<br>
		<img src="images/<?php echo $row['name'];?>.jpg">
		<br>
		Description:<?=$row['description'];?>
		<br>
		Maximum Selling price:<input type="number" name="msp" class="msp">
		<input type="hidden" class="prod_id" value="<?= $row['id'];?>"/>
		<input type="button" value="Set Price" class="btn btn-success set_msp">
	</div>
		<br>
		<br>
<?php
}
?>