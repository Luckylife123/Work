<?php get_header(); ?>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
					<div class="current_post col-sm-7 col-md-9">
						<h1 class="title_current_post"><?php  the_title();?></h1>
						<div class="header_post_list">		
							<ul>
								<li><i class="fa fa-calendar"><?php the_time('j F Y');?></i></li>
								<li><i class="fa fa-eye"><?php echo pvc_get_post_views( $post->ID ) ?></i></li>							
							</ul>
							<?php echo get_the_category_list() ?>		
						</div>				
						<div class="img_current_post"><img class="aligncenter" src="<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
							echo $thumb_url[0];?>" alt="logo"></div>
						<p class="content_current_post"><?php  the_post(); the_content();?></p>
    					<div id="vk_comments"></div> 
                        <script type="text/javascript"> 
                        VK.Widgets.Comments("vk_comments", {limit: 10, attach: false}); 
                        </script>	
                    </div>
					<div class="sidebar col-sm-5 col-md-3" id="scrollable">
									<?php get_sidebar() ?>
					</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
