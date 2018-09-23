<?php get_header(); ?>
<div class="wrapper">>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-8 all_posts">	
						<?php
						if ( have_posts() ) : ?>
							<header class="page-header">
								<h1 class="title_posts"><?php								
									printf( esc_html__( 'Поиск: %s', 'pyramid' ), '<span>' . get_search_query() . '</span>' );
								?></h1>
							</header>
							<?php
						while ( have_posts() ) : the_post();?>
												<div class="content">
		<div class="container-fluid">
			<div class="row">				
				<div class="all_posts col-sm-7 col-md-8">
					<div class="container-fluid">
						<div class="row">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
							<a class="post_a" href="<?php the_permalink() ?>">
								<div class="post col-sm-12 col-md-5 col-md-offset-1">
									<img src="<?php $thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
								 	echo $thumb_url[0];?>" alt="1">

									<p class="title"><?php the_title();?> </p>
									<input type="button" class="btn btn-defalut" name="" value="Далле">
									<div class="footer_post">								
										<span><i class="fa fa-calendar"><?php the_time('j F Y');?></i></span>
										<span><i class="fa fa-eye">233</i></span>		
									</div>
								</div>
							</a>
							<?php endwhile;	endif;?>

						</div>						
					</div>
				</div>	
				<div class="sidebar col-sm-5 col-md-4"></div>
			</div>
		</div>	
	</div>			
				
				
<?php get_footer();?>