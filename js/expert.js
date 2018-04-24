$(document).ready(function()
{
	$(".set_msp").click(function()
	{
		var value = $(this).parents(".expert_product").find(".msp").val();
		var id = $(this).parents(".expert_product").find(".prod_id").val();
		var parent = $(this).parents(".expert_product");
		$.ajax
		({
			type: "POST",
			url: "set_msp.php",
			data: { msp: value, id: id},
			success: function(response)
			{
				parent	.fadeOut("slow");
				setTimeout(function()
				{
					parent.remove();
				},1000);
			}
		});
	});
});