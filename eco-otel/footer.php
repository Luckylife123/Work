
	</div>	
	<div id="calendar" style="background-color:rgba(0,0,0,0.6);padding:20px;display: none;">	
		<div style="max-width: 800px;margin:0 auto;">
			<?php echo apply_filters('the_content', '[CPMV_CALENDAR view="1"]') ?>
		</div>
		<form id="form" onsubmit="return send('<?php bloginfo('template_directory') ?>','<?php echo get_option('admin_email');?>')" method="post">
			<select name="aparatment" id="aparatment" class="form-control" required>
				<option value="">Выберете жилье:</option>
				<option value="Номер 1" class="room">Номер 1</option>
				<option value="Номер 2" class="room">Номер 2</option>
				<option value="Номер 3" class="room">Номер 3</option>
				<option value="Номер 4" class="room">Номер 4</option>
				<option value="Номер 5" class="room">Номер 5</option>
				<option value="Номер 6" class="room">Номер 6</option>
				<option value="Номер 7" class="room">Номер 7</option>
				<option value="Номер 8" class="room">Номер 8</option>
				<option value="Дом 1" class="house">Дом 1</option>	
				<option value="Дом 2" class="house">Дом 2</option>			
			</select>
			<input type="text" name="name" id="name" class="form-control" placeholder="Введіть ім'я" required>
			<input type="text" name="number" id="number" class="form-control" placeholder="Введіть телефон" required>
			<input name="date" id="date" class="form-control" required>
			<input type="text" name="email" id="email"  class="form-control" placeholder="mail" required>
			<textarea  name="comment" id="comment" class="form-control" placeholder="Комметарий"></textarea><br>
			<input type="submit" class="btn btn-primary" value="забронировать">
		</form>
		
	</div>
</div>
	<footer>		
		<div class="container" style="color:#fff">
			<div style="float:left;margin-top: 5px;">Eco-hotel Megaron © 2018</div>
			<div style="float:right;margin-top: 5px;"><a href="http://vk.com/public55550360" target="_blank">ВКонтакте </a></div>
			<div style="float:right;margin-top: 5px;"><a href="https://www.facebook.com/Эко-отель-Мегарон-483696265305460/" target="_blank" style="margin-right: 10px;">Фейсбук </a></div>
		</div>
	</footer>

<script src="<?php bloginfo('template_directory') ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/AnimateBg.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/animateContent.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/ajaxContent.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/email.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/daterangepicker.css">
<script src="<?php bloginfo('template_directory') ?>/js/moment.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/daterangepicker.js"></script>
<script>
	$().ready(function(){	
		changeBG('<?php bloginfo('template_directory') ?>',2);	
		$(window).load(function(){
			$('#preloader').fadeOut('slow',function(){
				$(this).remove();
			});
		});

		$(function(){
		 $('#date').daterangepicker();
		});

		$(document).on('scroll',function(){
			 var position = $('html').scrollTop();
			 position += 300;
			 if(position>=$('#form').offset().top){
			 	$('.toBuy').css('display','none');
			 }
			 else{
			 	$('.toBuy').css('display','block');
			 }
		});

		if(<?php if(is_page( 'Спасибо' ))echo "1";else echo 0; ?>){		
		    $(".navbar").css('display','none');	
			loadPage($("#thanks").html()); 
		    setTimeout(function(){$('.title').css('display','none')},100);

		}
	});
</script>
<?php wp_footer(); ?>
</body>
</html>
