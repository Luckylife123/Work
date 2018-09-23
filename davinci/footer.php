
</div>
<div class="footer">
	<div class="footer-menu container">
		<a href="<?php echo get_home_url() ?>" class='footer-home-link'>da vinci</a>
		<?php wp_nav_menu();?>		
		<a href="https://vk.com/vkcitat" class="footer-vk"><i class="fab fa-vk"></i></a>
	</div>
</div>
<a href="#" class="scrollup" style="background-image: url(<?php bloginfo( 'template_directory' );?>/img/arrow.png);">Наверх</a>
<?php wp_footer(); ?>
<script src="<?php bloginfo( 'template_directory' );?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/bootstrap.min.js"></script>	
<script src="<?php bloginfo( 'template_directory' );?>/js/bootstrap.slider.js"></script>	


<script>

	$(window).ready(function(){
		if($( window ).width()>770){
			$(window).scroll(function() { 		
				if($(window).scrollTop() > $('.header-menu').offset().top){
					$('.header-menu').css('position','fixed');
					$('.header-menu').css('top','0px');		
					$('.header-menu').css('width','100%');			
				}

				if( $(window).scrollTop() < 200 ){
					$('.header-menu').css('position','relative');
				}
			});
		}
		else{
			$(window).scroll(function() { 		
				if($(window).scrollTop() > $('.header').offset().top){
					$('.header').css('position','fixed');
					$('.header').css('top','0px');		
					$('.header').css('width','100%');			
				}

				if( $(window).scrollTop() < 200 ){
					$('.header').css('position','relative');
				}
			});
		}

		$( ".content p" ).has( "img" ).css( "width", "100%" );

	
		$(window).scroll(function() { 
			if ($(window).scrollTop() > 100) {
					$('.scrollup').fadeIn();
					} else {
					$('.scrollup').fadeOut();
					}			
		});

		$('.scrollup').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
		});



			

			

				if($( window ).width()>770){
				var firstOffset = parseInt($('.wrapper-sidebar').offset().top) - $('.header-menu').height() - $('.header-menu').outerHeight();
				var Wheight = $(window).height();
					$(window).scroll(function() {   
					   				var bottomOffset = parseInt($('.wrapper-sidebar').offset().top + $('.wrapper-sidebar').outerHeight());
					   				if($(window).scrollTop() + Wheight < parseInt($('.footer').offset().top)-100){
					   					if($(window).scrollTop() + Wheight > bottomOffset){						    	
							    			$('.wrapper-sidebar').stop().animate({marginTop:$(window).scrollTop() + Wheight - firstOffset - parseInt($('.wrapper-sidebar').outerHeight())});		  		
							    		}
							    		else if($(window).scrollTop() < $('.wrapper-sidebar').offset().top){
								    		var margin = $(window).scrollTop() - firstOffset;
								    		if(margin > 0){
								    			$('.wrapper-sidebar').stop().animate({marginTop: margin+25});
								  	  		}
								    		else{
								    			$('.wrapper-sidebar').stop().animate({marginTop: 0});
								    		}
								    	}	
					   				}							    	
							    							    	   
					});
			    }

    
	});


</script>
</body>
</html>
