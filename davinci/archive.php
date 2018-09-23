<?php


get_header();
?>


<div class="content container">
	<div class="all-posts">
		<?php the_archive_title( '<h5 class="title-last-articles">', '</h5>' ); ?>
		<div class="last-articles">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
				<?php 	get_template_part( 'template-parts/content', get_post_format() ); ?>                    	 												
			<?php endwhile;		global $wp_query;?>
				<?php if (  $wp_query->max_num_pages > 1 ) : ?>
					<script>
					var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
					var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
					var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
					var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
					</script>
			
						<div id="true_loadmore">Загрузить ещё</div>
			
				<?php endif; 		

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>	
		
			
	</div>	
<?php get_sidebar(); ?>
</div>




<?php
get_footer();
