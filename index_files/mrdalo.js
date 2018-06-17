$(document).ready(function()
			{
				$("textarea").on('mousedown',function(e)
					{
						var initialx = e.pageX - $(this).position().left;
						var initialy = e.pageY - $(this).position().top;						
						var tekuci = $(this);
						$(window).on('mousemove',function(e)
							{
								var posx= e.pageX-initialx;
								var posy= e.pageY-initialy;
								
							$(tekuci).css({'left':posx,'top':posy,});
						    
						    });
						$(window).on('mouseup',function()
							{
									$(this).off('mousemove');
							});
						    
					});	
		});		
	
	
	
	
