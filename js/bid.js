$(document).ready(function()
{
	$("#bid_now").click(function()
	{

		var bid = $("#bid_amt").val();
		var prod_id = $("#prod_id").val();
		$.ajax
		({
			type: "POST",
			url: "bid.php",
			data: { bid_amt: bid, prod_id: prod_id},
			success: function(response)
			{
				$("#highest_bid").html(response);
			}
		});
	});
});