<?php get_header();?>
<div class="single-post" style="background-image: url('<?php $thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
									 	echo $thumb_url[0];?>')">
					<div class="single-post-mask">
						<div class="single-title-post">
							<?php the_title(); ?>
						</div>
						<div class="about-single-post">												
						    <span class='single-post-time'><?php the_time('j F Y');?></span>
						    <div class="cat"><?php the_category('>','single'); ?></div>    
							<span class='single-post-view'><i class="fas fa-eye"> <?php echo pvc_get_post_views( $post->ID ) ?></i></span>
						</div>
					</div>
						
			
			
</div>


<div class="content">
	<div class="single-text">
		<div class="container" style="margin-top: 75px;">
			<?php the_post(); the_content(); ?>
		</div>
	</div>
</div>

<div class="container single-popular-posts">
	<h5 class='single-hot-posts'> Самые читаемые </h5>
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
			<?php	$args = array( 'posts_per_page' => 5 );
			$firstSlide = true;
			$myposts = pvc_get_most_viewed_posts( $args );
		 	foreach ( $myposts as $post ) : setup_postdata( $post ); ?>		
			<?php if($firstSlide) { ?>
            <div class="carousel-item col-md-3  active wow fadeIn">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="<?php echo get_permalink() ?>" title="<?php the_title();?>">
                    	<div class='popular-single-post-time'><?php the_time('j F Y');?></div>
                    	<?php the_title();?>
                    </a>
                  </div>
                </div>
            </div>
			 <?php $firstSlide = false; } else { ?>
            <div class="carousel-item col-md-3 wow fadeIn">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                  	<div class='popular-single-post-time'><?php the_time('j F Y');?></div>
                    <a href="<?php echo get_permalink() ?>" title="<?php the_title();?>">                    	
                    	<?php the_title();?>
                    </a>
                  </div>
                </div>
            </div>

                <?php } endforeach;
			wp_reset_postdata(); ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>



<?php
get_footer();
