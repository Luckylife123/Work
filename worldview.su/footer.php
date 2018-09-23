	<div class="footer">	
				<a class="btn btn-social-icon btn-vk" href="https://vk.com/w0rld_view">
			    <span class="fa fa-vk"></span>
			    </a>
		<ul class="else_pages">			
				<?php $args = array(
					'depth'        => 0,
					'show_date'    => '',
					'date_format'  => get_option('date_format'),
					'child_of'     => 0,
					'exclude'      => '',
					'exclude_tree' => '',
					'include'      => '',
					'title_li'     => __(''),
					'echo'         => 1,
					'authors'      => '',
					'sort_column'  => 'menu_order, post_title',
					'sort_order'   => 'ASC',
					'link_before'  => '',
					'link_after'   => '',
					'meta_key'     => '',
					'meta_value'   => '',
					'number'       => '',
					'offset'       => '',
					'walker'       => '',
					'post_type'    => 'page', // из функции get_pages()
				); 
				wp_list_pages( $args );
				 ?>
		</ul>
		<p>©2018 Все права защищены. Полное или частичное копирование материалов сайта без согласования с редакцией запрещено.</p>
	</div>  
	<?php $categoriess = get_categories( $args );
				foreach ($categoriess as $key){						
				 	  $gp='orderby=rand&showposts=10&cat='.$key->cat_ID;
			  		  $posts = get_posts( $gp );?>
			  		  <div class="cat-posts" id="categId<?php echo $key->cat_ID;?>" data-name="<?php echo $key->cat_name;?>">
			     <?php foreach($posts as $post){ setup_postdata($post);?>    
			    		<a href="<?php the_permalink();?>"> 
					    <div class="cat-post">
					      <img  src="<?php $thumb_id = get_post_thumbnail_id();
													$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
												 	echo $thumb_url[0];?>" alt="<?php the_title()?>">			
					        <div class="title-cat-post"><?php the_title();?></div>						             
					    </div>	
					    </a>						
			  <?php }?>
				</div>
			 <?php }  ?> 
<script src="<?php bloginfo( 'template_directory' );?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/slick.min.js"></script>
<a href="#" class="scrollup" style="background-image: url(<?php bloginfo( 'template_directory' );?>/img/arrow.png);">Наверх</a>
<script>
$(document).ready(function(){
	$('#myCarousel').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: true,
  variableWidth: true,
  autoplay:false
});


if($( window ).width()>768){
$('.cat-item a').each(function(){
	$(this).hover(function(){
		$('.cat-posts.active').removeClass('active');
		$('[data-name="'+$(this).text()+'"]').addClass('active');
		$('.cat-posts.active').mouseleave(function(){
			$(this).removeClass('active');
		})
	});
});

var firstOffset = parseInt($('.sidebar').offset().top)-10;
$(window).scroll(function() {   
   				var bottomOffset = parseInt($('.sidebar').offset().top + $('.sidebar').outerHeight());
		    	if($(window).scrollTop() + 300 > bottomOffset){
		    		$('.sidebar').stop().animate({marginTop:$(window).scrollTop() + 300 - firstOffset - parseInt($('.sidebar').outerHeight())})
		    	}
		    	else if($(window).scrollTop() < $('.sidebar').offset().top){
		    		var margin = $(window).scrollTop() - firstOffset;
		    		if(margin > 0){
		    			$('.sidebar').stop().animate({marginTop: margin});
		  	  		}
		    		else{
		    			$('.sidebar').stop().animate({marginTop: 0});
		    		}
		    	} 

    });


}

    



$(window).scroll(function(){
if ($(this).scrollTop() > 100) {
$('.scrollup').fadeIn();
} else {
$('.scrollup').fadeOut();
}
});
$('.scrollup').click(function(){
$("html, body").animate({ scrollTop: 0 }, 600);
return false;
});
});
</script>


<script type="text/javascript" > 
(function (d, w, c) { 
(w[c] = w[c] || []).push(function() { 
try { 
w.yaCounter47955449 = new Ya.Metrika({ 
id:47955449, 
clickmap:true, 
trackLinks:true, 
accurateTrackBounce:true 
}); 
} catch(e) { } 
}); 

var n = d.getElementsByTagName("script")[0], 
s = d.createElement("script"), 
f = function () { n.parentNode.insertBefore(s, n); }; 
s.type = "text/javascript"; 
s.async = true; 
s.src = "https://mc.yandex.ru/metrika/watch.js"; 

if (w.opera == "[object Opera]") { 
d.addEventListener("DOMContentLoaded", f, false); 
} else { f(); } 
})(document, window, "yandex_metrika_callbacks"); 
</script> 
<noscript><div><img src="https://mc.yandex.ru/watch/47955449" style="position:absolute; left:-9999px;" alt="" /></div></noscript> 

</body>
</html>