
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ( is_front_page() ) { ?>
		<meta property="og:title" content="<?php bloginfo( 'name' );?>"/>
		<meta property="og:description" content="<?php bloginfo( 'name' );?>"/>
		<meta property="og:image" content="<?php bloginfo( 'template_directory' );?>/img/logo.jpg "/>
		<meta property="vk:image"  content="<?php bloginfo( 'template_directory' );?>/img/logo.jpg" />
		<meta property="og:url" content='<?php echo get_home_url() ?>'/>
	<?php	}	else {?>
		<meta property="og:title" content="<?php the_title(); ?>"/>
		<meta property="og:image" content='<?php 
										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
										 echo $thumb_url[0];
										?>'/>
		<meta property="vk:image"  content='<?php 
										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
										 echo $thumb_url[0];
										?>' />
		<meta property="og:description" content="<?php the_title(); ?>"/>
		<meta property="og:url" content="<?php the_permalink() ?>"/>
	<?php	} ?>
	<meta property="og:site_name" content="<?php bloginfo( 'name' );?>"/>	
  	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' );?>/img/Ava1.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/css/wow.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/css/bootstrap.slider.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' );?>/style.css">
	<script type="text/javascript" src="https://vk.com/js/api/openapi.js?159"></script>

	<?php wp_head(); ?>
</head>

<body>

	<script src="<?php bloginfo( 'template_directory' );?>/js/wow.js"></script>
              <script>
              new WOW().init();
              </script>        
<div class="wrapper">

	<div class="header">
		<div class="header-icons container">
			
			<a href="javascript:void(0);"  class="search" onclick="{$('#searchform').toggleClass('active');$('.search').toggleClass('active');}"><i class="fas fa-search"></i></a>
			<a href="https://vk.com/vkcitat" class="header-vk"><div><i class="fab fa-vk"></i></div></a>
			<?php get_search_form(); ?>
			<a href="<?php echo get_home_url() ?>">da vinci</a>
			<div class="burger" onclick="{$('.burger').toggleClass('active');$('.mobile-menu').toggleClass('active');}">
			<i class="fas fa-bars"></i>
			</div>		
		</div>

		<div class="header-menu">
			<div class="menu container">
				<?php 
				wp_nav_menu();
				?>			
			</div>			
		</div>
		<div class="mobile-menu">
			<div class="mobile-menu-list">
				<?php wp_nav_menu(); ?>
			</div>
			<a href="https://vk.com/vkcitat" class="header-mobile-vk"><div><i class="fab fa-vk"></i></div></a>  	
		</div>		
	</div>


	
