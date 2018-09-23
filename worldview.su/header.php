<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo( 'name' );?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php if ( is_front_page() ) : ?>
		<meta property="og:title" content="<?php bloginfo( 'name' );?>"/>
		<meta property="og:description" content="<?php bloginfo( 'name' );?>"/>
		<meta property="og:image" content="<?php bloginfo( 'template_directory' );?>/img/Shapka1.png?>"/>
		<meta property="vk:image"  content="<?php bloginfo( 'template_directory' );?>/img/Shapka1.png?>"" />
	<?php		else :?>
		<meta property="og:title" content="<?php the_title(); ?>"/>
		<meta property="og:image" content="<?php 
										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
										 echo $thumb_url[0];
										?>"/>
		<meta property="vk:image"  content="<?php 
										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
										 echo $thumb_url[0];
										?>"" />
		<meta property="og:description" content="<?php the_title(); ?>"/>
	<?php	endif; ?>
	<meta property="og:site_name" content="<?php bloginfo( 'name' );?>"/>
	<meta property="og:url" content="<?php the_permalink() ?>"/>
  	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' );?>/img/Ava1.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/css/slick.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?<?php echo time();?>">	
    <script src="//vk.com/js/api/openapi.js?152"></script> 
     <script type="text/javascript"> 
VK.init({apiId: 6398479, onlyWidgets: true}); 
</script> 
</head>
<body>
	<?php 	$args = array('show_option_all'    => '',
												'show_option_none'   => __('No categories'),
												'orderby'            => 'name',
												'order'              => 'ASC',
												'show_last_update'   => 0,
												'style'              => 'list',
												'show_count'         => 0,
												'hide_empty'         => 1,
												'use_desc_for_title' => 1,
												'child_of'           => 2,
												'feed'               => '',
												'feed_type'          => '',
												'feed_image'         => '',
												'exclude'            => '',
												'exclude_tree'       => '',
												'include'            => '',
												'hierarchical'       => true,
												'title_li'           => '',
												'number'             => NULL,
												'echo'               => 1,
												'depth'              => 0,
												'current_category'   => 0,
												'pad_counts'         => 0,
												'taxonomy'           => 'category',
												'walker'             => 'Walker_Category',
												'hide_title_if_empty' => false,
												'separator'          => '<br />',
															); ?>
	<div class="header">			
			<div class="header_navbar">
				<nav class="navbar navbar-inverse"> 
				  <div class="container-fluid">
				    <div class="navbar-header">
				    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span> 
				      </button>
				      <a class="navbar-brand" href="<?php echo get_home_url() ?>"><img src="<?php bloginfo( 'template_directory' );?>/img/Ava1.png" alt="logo"></a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">				   
					    <?php					$args = array(
												'show_option_all'    => '',
												'show_option_none'   => __('No categories'),
												'orderby'            => 'name',
												'order'              => 'ASC',
												'show_last_update'   => 0,
												'style'              => 'list',
												'show_count'         => 0,
												'hide_empty'         => 1,
												'use_desc_for_title' => 1,
												'child_of'           => 0,
												'feed'               => '',
												'feed_type'          => '',
												'feed_image'         => '',
												'exclude'            => '',
												'exclude_tree'       => '',
												'include'            => '',
												'hierarchical'       => true,
												'title_li'           => '',
												'number'             => NULL,
												'echo'               => 1,
												'depth'              => 0,
												'current_category'   => 0,
												'pad_counts'         => 0,
												'taxonomy'           => 'category',
												'walker'             => 'Walker_Category',
												'hide_title_if_empty' => false,
												'separator'          => '<br />',
															);
																echo '<ul class="nav navbar-nav">';
																	wp_list_categories( $args );
																echo '</ul>';
						get_search_form( )?>

					</div>
				  </div>
				</nav>
			</div>			  			
	</div>