							<div class="post wow fadeIn">		
							    <a href="<?php echo get_permalink() ?>" class='post-img-permalink' style='background-image: url("<?php 	$thumb_id = get_post_thumbnail_id();
											$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
												echo $thumb_url[0];?>")'>
												<div class="mask">
													<span class="view-post"><i class="fas fa-eye"></i> <?php echo pvc_get_post_views( $post->ID ) ?></span>
												</div>
								</a>		
								<div class='about-post'>
									<div class="cat"><?php the_category('>','single'); ?></div>
									<span class="time-post"><?php the_time('j F Y');?></span>
								</div>

								<a href="<?php echo get_permalink() ?>" class="post-title-permalink">
							    	<?php the_title(); ?>
							    </a>				 					
							</div>	 