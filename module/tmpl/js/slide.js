jQuery(document).ready(function(){
	var id = "div.minpanel";
	jQuery(id).hide();	
	jQuery("div.srfrContainer span.title").click(function(){		
		if(jQuery(id).is(":visible")==true){			
			jQuery("#expandmarker").html("[+]");
		} else
		{			
			jQuery("#expandmarker").html("[-]");
		}	
		jQuery(id).slideToggle(250,function(){
			
		});
		
	});

});


