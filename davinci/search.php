<?php
get_header();
?>
<div class="content container">
	<div class="all-posts">
		<div class="last-articles">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
							<?php 	get_template_part( 'template-parts/content', get_post_format() ); ?>      												
			<?php endwhile;		
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>	
			<?php   my_paginate_links();?>
			
	</div>	
<?php get_sidebar(); ?>
</div>


<?php
get_sidebar();
get_footer();
