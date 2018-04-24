$(document).ready(function()
{
	var progress_class,old_class, width;
	$(".fancybox").fancybox();
	$("#search_box").keyup(function(e)
	{
        $("#search_list").show();
        var s = $(this).val();
        if(s!="")
        {
           $.ajax
            ({
                type: "POST",
                url: "search_list.php",
                data: {search: s},
                success: function(data)
                {
                    $("#search_list").html(data);
                }
            });
        }
        else
        {
            $("#search_list").html('');
        }
	});
	$("#track_btn").click(function()
    {
        var order_id = $("#order_id").val();
        var parent = $(this).parents("#track_order");
        if(order_id=="1")
        {
        	response = '{"track":"Packing","class":"danger","percent":"20"}';
        }
        else if(order_id=="2")
        {
        	response = '{"track":"Shipping","class":"warning","percent":"40"}';
        }
        else if(order_id=="3")
        {
        	response = '{"track":"Shipped","class":"primary","percent":"60"}';
        }
        else if(order_id=="4")
        {
        	response = '{"track":"Delievering","class":"info","percent":"80"}';
        }
        else if(order_id=="5")
        {
        	response = '{"track":"Delievered","class":"success","percent":"100"}';
        }
        else
        {
        	response = "";
        }
        if(response=="")
        {
            parent.find("#progress_bar").hide();
            parent.find("#track_status").show();
            parent.find("#track_status").text('No match found!');
            return;
        }
        else
        {
            myArray = JSON.parse(response);
            data = myArray['track'];
            progress_class = myArray['class'];
            width = myArray['percent'];

            parent.find("#track_status").hide();
            parent.find("#progress_bar").hide();
            parent.find("#track_status_div img").show();
            parent.find("#progress_bar div").removeClass("progress-bar-"+old_class);
            parent.find("#progress_bar div").css('width','0%');
            parent.find("#track_status").removeClass("text-"+old_class);
            setTimeout(function()
            {
                parent.find("#track_status_div img").hide();
                parent.find("#progress_bar").show();
                parent.find("#progress_bar div").addClass("progress-bar-"+progress_class);
                parent.find("#progress_bar div").animate({width : width+'%'},150);
                setTimeout(function()
                {
                    parent.find("#track_status").addClass("text-"+progress_class);
                    parent.find("#track_status").text(data);
                    parent.find("#track_status").fadeIn("slow");
                },1000);
            },500);
            old_class = progress_class;
        }
    });
	
    $(document).on("click",".shortlist",function()
    {
      var id = $(this).attr('rel');
      var caller = $(this);
      $.ajax
      ({
        type: "GET",
        url: "addshort.php",
        data: {k: id},
        success: function()
        {
          caller.removeClass("btn-success");
		  caller.removeClass("shortlist");
		  caller.addClass("remove_short");
		  caller.addClass("btn-danger");
		  caller.find(".add_text").text('Remove');
		  caller.find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }
      });
    });
	$(document).on("click",".remove_short",function()
    {
      var id = $(this).attr('rel');
      var caller = $(this);
	  $.ajax
      ({
        type: "GET",
        url: "removeshort.php",
        data: {k: id},
        success: function(response)
        {
		  caller.removeClass("btn-danger");
		  caller.removeClass("remove_short");
		  caller.addClass("shortlist");
		  caller.addClass("btn-success");
		  caller.find(".add_text").text('Add to Shortlist');
		  caller.find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
		}
	  });
    });
});