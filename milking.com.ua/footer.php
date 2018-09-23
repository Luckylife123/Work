	<div class="footer-wrap">
		<a href="#home" data-gal="m_PageScroll2id" data-ps2id-offset="30"><div class="arrow-up">&#xf106;</div></a>	
		<div class="footer-social">	
			<div class="container">
				<div class="sixteen columns">	
					<a href="https://www.facebook.com/%D0%94%D0%B5%D1%82%D1%81%D0%BA%D0%B0%D1%8F-%D0%9C%D0%BE%D0%BB%D0%BE%D1%87%D0%BD%D0%B0%D1%8F-%D0%9A%D0%A3%D0%A5%D0%9D%D0%AF-332618223769094/" target="_blank" data-dummy=	"Facebook">Facebook</a>				
					<a href="https://www.instagram.com/molochnaya_kuhnya_kiev/" target="_blank" data-dummy="Instagram">Instagram</a>
					<a href="https://t.me/molochnayakuhnya" target="_blank" data-dummy="Telegram">Telegram</a>
				</div>
			</div>
		</div>
        <div class="footer-credit">	
			<div class="container">
				<div class="sixteen columns">
					<p>Дитяча молочна кухня 2018 ©</p>
				</div>
			</div>
		</div>
	</div>
<div class="basket">
<span id="count_of_products"></span>
	<button class="Basket_button"  type="button" data-toggle="modal" data-target="#myModal" style="background-image: url('<?php bloginfo( 'template_directory' );?>/images/basket.png');"></button>
</div>
				<div id="myModal" class="modal fade" style="display:none">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">								
								<span class="modal-title">Ваше замовлення</span>		
							</div>
							<div class="modal-body">
								<div id="set_body">
									
								</div>
								<div id="day">
									
								</div>
								<div id="basket_body">
									

								</div>		
								<div id="price_of_products">
									

								</div>						
							</div>					
							<div class="modal-footer">
								<div class="form" id="send_form">
				  					<div class="for_form">
				  						<p class="title_form"><p>ОФРОМІТЬ ЗАЯВКУ</p>
				  						<form name="form1" >				  							
											<input  id="name" type="text" name="name" class="form-control input_form" placeholder="ІМ’Я*" required>
											<br>
											<input  id="number" type="text" name="number" class="form-control input_form" placeholder="ТЕЛЕФОН*" required>
											<br>
											<input  id="adress" type="text" name="adress" class="form-control input_form" placeholder="АДРЕСА ДОСТАВКИ*" required>
											<br>
											<input  id="email" type="text" name="email" class="form-control input_form" placeholder="ЕЛЕКТРОННА ПОШТА*" required>
											<br>
											<textarea id="comment"  name="comment" class="form-control input_form" placeholder="ВАШ КОМЕНТАР (не обов’язково)"></textarea>
											<br>										
				  						</form>
				  						<button id="mySubmit" onclick="sumbitClick('<?php bloginfo( 'template_directory' );?>','<?php echo get_option('admin_email');?>')" class="btn btn-default button_submit">Відправити</button>	
				   					</div>
				  				</div>  			
								<button class="btn btn-default" type="button" data-dismiss="modal">Закрити</button>
							</div>
						</div>
					</div>
				</div>
				<div id="ModalSet" class="modal fade" style="display:none">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">								
								<span class="modal-title" id="chooseSet"></span>		
							</div>
							<div class="modal-body" ></div>					
							<div class="modal-footer">							 			
								<button class="btn btn-default" type="button" data-dismiss="modal" id="close_modal">Закрити</button>
							</div>
						</div>
					</div>
				</div>
				<div id="ModalChooseSet" class="modal fade" style="display:none">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">								
								<span class="modal-title">Спочатку виберіть набір.</span>		
							</div>
							<div class="modal-body" ></div>					
							<div class="modal-footer">							 			
								<button class="btn btn-default" type="button" data-dismiss="modal">Закрити</button>
							</div>
						</div>
					</div>
				</div>
				<div id="SingleModalChooseSet" class="modal fade" style="display:none">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">								
								<span class="modal-title">Спочатку виберіть набір.</span>		
							</div>
							<div class="modal-body" ></div>					
							<div class="modal-footer">							 			
								<button class="btn btn-default" type="button" data-dismiss="modal">Закрити</button>
							</div>
						</div>
					</div>
				</div>
<script src="<?php bloginfo( 'template_directory' );?>/js/jquery.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/basket.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/email.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/animation.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/modernizr.custom.js"></script> 
<script src="<?php bloginfo( 'template_directory' );?>/js/royal_preloader.min.js"></script>
<script>
(function($) { "use strict";
            Royal_Preloader.config({
                mode:           'logo',
                logo:           '<?php bloginfo( 'template_directory' );?>/images/loader.png',
                timeout:        0,
                showInfo:       false,
                opacity:        1,
                background:     ['#FFFFFF']
            });
})(jQuery);
</script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/retina-1.1.0.min.js"></script>	
<script src="<?php bloginfo( 'template_directory' );?>/js/jquery.easing.js"></script>	
<script src="<?php bloginfo( 'template_directory' );?>/js/classie.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/cbpAnimatedHeader.min.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/menu.js"></script>  
<script src="<?php bloginfo( 'template_directory' );?>/js/jquery.malihu.PageScroll2id.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/jquery.parallax-1.1.3.js"></script>	
<script src="<?php bloginfo( 'template_directory' );?>/js/animated-headline.js"></script> 
<script src="<?php bloginfo( 'template_directory' );?>/js/scroll.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/jquery.mobile.min.js"></script> 
<script src="<?php bloginfo( 'template_directory' );?>/js/jquery.counterup.min.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/waypoints.min.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/visible.min.js"></script> 
<script src="<?php bloginfo( 'template_directory' );?>/js/pro-bars.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/imagesloaded.pkgd.min.js"></script> 
<script src="<?php bloginfo( 'template_directory' );?>/js/jquery.fitvids.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/masonry.js"></script> 
<script src="<?php bloginfo( 'template_directory' );?>/js/isotope.js"></script> 
<script src="<?php bloginfo( 'template_directory' );?>/js/contact.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/template.js"></script> 
<script src="<?php bloginfo( 'template_directory' );?>/js/comm.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/jshttprequest.js"></script>
</body>
</html>