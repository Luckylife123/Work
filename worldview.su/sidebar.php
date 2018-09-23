<h2>ПОПУЛЯРНОЕ ЗА НЕДЕЛЮ:</h2>
<?php		 query_posts('orderby=rand&showposts=10');?>			  		
			     <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					<div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">	
							<a  class="sidebar_post_a" href="<?php the_permalink() ?>">	
								<div class="sidebar_post" >
										<img src="<?php 	$thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
										echo $thumb_url[0];?>" alt="">
										<p><?php the_title();?></p>
								</div>													
							</a> 
					</div>
	         <?php endwhile;	endif;?>
	         <?php wp_reset_postdata(); ?>
			      

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sidebar_section">
					<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) {
					return;	}	?>
				<aside id="secondary" class="widget-area">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</aside><!-- #secondary -->
			</div>


			       					
			 
		