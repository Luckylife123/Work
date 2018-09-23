	<div class="footer">	
				<a class="btn btn-social-icon btn-vk" href="https://vk.com/uchimir">
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
<script src="<?php bloginfo( 'template_directory' );?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php bloginfo( 'template_directory' );?>/js/bootstrap.min.js"></script>
<a href="#" class="scrollup" style="background-image: url(<?php bloginfo( 'template_directory' );?>/img/arrow.png);">Наверх</a>
<script type="text/javascript">
$(document).ready(function(){
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
</body>
</html>