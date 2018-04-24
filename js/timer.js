$(document).ready(function()
			{
				$("#start_now").click(function()
				{
				$("#start_now").css("display","none");
				$(".disperse").css("display",""); 	
				var time = 10;
				var temp;
				var id = $("#prod_id").val();
				$("#info").slideUp("fast");
				$("#test").slideDown("fast");
				timer = setInterval(function()
							{
								time--;
								temp = parseInt(time/60);
								$("#minutes").text(temp);
								$("#seconds").text((time-(temp*60)));
								if(time==0)
								{
									clearInterval(timer);
									$.ajax
									({
										type: "POST",
										url: "winner.php",
										data: {id: id},
										success: function(data)
										{
											$('#bid_now').attr("disabled",true);
											$("#winner").html(data);
											$("#modal_trigger").trigger("click");
										}
									});
		
								}
							},1000);
			});
			});
