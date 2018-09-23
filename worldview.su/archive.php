<?php get_header(); ?>
	<div class="content">
		<div class="container-fluid">
			<div class="row">				
				<div class="all_posts col-xs-12 col-sm-9">
					<div class="container-fluid">
						<div class="row">
							<?php
							if ( have_posts() ) : ?>
								<header class="page-header">
								<!-- 	<?php
										the_archive_title( '<h1 class="page-title">', '</h1>' );
										the_archive_description( '<div class="archive-description">', '</div>' );
									?> -->
								</header>
								<?php
								while ( have_posts() ) : the_post();?>
							<a class="post_a" href="<?php the_permalink() ?>">
								<div class="post col-sm-12">	
									<div class="left-of-post" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
									 	echo $thumb_url[0];?>)">								
													
									 </div>										
									<div class="right-of-post">
										<div class="footer_post">								
											<span><i class="fa fa-calendar"> <?php the_time('j F Y');?></i></span>
											<span><i class="fa fa-eye"><?php echo pvc_get_post_views( $post->ID ) ?></i></span>		
											<span><u><?php $cat = get_the_category();echo $cat[0]->cat_name; ?></u></span>		
										</div>											
										<p class="title"><?php the_title();?> </p>     
										<div class="mini_content"><?php the_excerpt();?> </div>                            	 
									</div>									
								</div>
							</a>
							<?php endwhile;	endif; ?>							
						</div>						
					</div>						
					<?php   my_paginate_links();?>
				</div>	
				<div class="sidebar col-xs-12 col-sm-3">
					<?php get_sidebar() ?>
				</div>
			</div>
		</div>	
	</div>
</div>
<?php get_footer(); ?>