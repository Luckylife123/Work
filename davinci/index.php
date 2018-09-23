<?php
get_header();
?>
	<div class="random-posts container">
		<?php $myquery = new WP_Query( array( 'orderby' => 'rand','posts_per_page' => 3 ) );   ?>
			<?php while( $myquery->have_posts() ) {
			$myquery->the_post();?>
				 <div class="random-post" style="background-image: url('<?php $thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
									 	echo $thumb_url[0];?>')">
				  <div class="wrapper-random-post">						 				
					 <div class="cat"><?php the_category('>','single'); ?></div>
					 <div class="title-random-post">			      	
					  <a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a>
					  </div>
					  <span class="time-random-post"><?php the_time('j F Y');?></span>
					  <span class="view-random-post"><i class="fas fa-eye"></i> <?php echo pvc_get_post_views( $post->ID ) ?></span>
				   </div>
				  </div>		 
		 	<?php } ?>
		
	</div>
<div class="content container">
	<div class="all-posts">
		<h5 class='title-last-articles'>Последние статьи</h5>
		<div class="last-articles">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
            
			<?php 	get_template_part( 'template-parts/content', get_post_format() ); ?>       	 												
			<?php endwhile; global $wp_query;?>
				<?php if (  $wp_query->max_num_pages > 1 ) : ?>
					<script>
					var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
					var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
					var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
					var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
					</script>
			
						<div id="true_loadmore">Загрузить ещё</div>
			
				<?php endif; ?>
		</div>
		<?php	endif;?>							
	</div>	
<?php get_sidebar(); ?>
</div>

<?php


get_footer();
