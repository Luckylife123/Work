

<aside id="secondary" class="widget-area sidebar">	
	<div class="wrapper-sidebar">
		<h5 class='hot-posts'> Самые читаемые </h5>
		<div class="popular-posts">
		<?php	$args = array( 'posts_per_page' => 4 );
				$myposts = pvc_get_most_viewed_posts( $args );
			 	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>								
									<div class='popular-post wow fadeIn'>
											
												<div class="about-popular-post">
													<div class="cat"><?php the_category('>','single'); ?></div>
													<span class="time-post"><?php the_time('j F Y');?></span>
												</div>											
												<a href="<?php echo get_permalink() ?>" class='post-title-permalink'>
													<?php the_title();?>
												</a>
											
									</div>												
		        <?php endforeach;
				wp_reset_postdata(); ?>
		</div>
		<div class="vk-group" style="display: flex;align-items: center;justify-content: center;">
		

			<!-- VK Widget -->
			<div id="vk_groups"></div>
			<script type="text/javascript">
			VK.Widgets.Group("vk_groups", {mode: 3, color1: 'C79850', color2: 'FFF', color3: '000'}, 47187081);
			</script>
		</div>

		
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
	
</aside><!-- #secondary -->
