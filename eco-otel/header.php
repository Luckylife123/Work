<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>База отдыха "Мегарон"</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content='Эко - отель "Мегарон"'/>
	<meta property="og:description" content="Комфортный эко - отель в Криму. 50 метров от самового чистого моря"/>
	<meta property="og:image" content="<?php bloginfo( 'template_directory' );?>/img/logo.png" />
	<meta property="vk:image"  content="<?php bloginfo( 'template_directory' );?>/img/logo.png" />
	 <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/favicon.png" type="image/x-icon">
	<link rel="profile" href="http://gmpg.org/xfn/11">	
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">

	<?php wp_head(); ?>
		<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f.fbq)f.fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '458129907947175');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=458129907947175&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->
</head>
<body>
<div class="wrapper">
	<div id="preloader"></div>
		<header>
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">		
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						</button>
					 	<a onclick='closeContent()' class="navbar-brand" href="javascript:void(0)"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="logo"></a>
					</div>
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						 <ul class="nav navbar-nav">
						 		  <?php  

									$args = array(
										'sort_order'   => 'ASC',
										'sort_column'  => 'post_date',
										'hierarchical' => 1,
										'exclude'      => '',
										'include'      => '',
										'meta_key'     => '',
										'meta_value'   => '',
										'authors'      => '',
										'child_of'     => 0,
										'parent'       => -1,
										'exclude_tree' => '',
										'number'       => '',
										'offset'       => 0,
										'post_type'    => 'page',
										'post_status'  => 'publish',
									); 
									$pages = get_pages( $args );
									foreach( $pages as $post ){
										setup_postdata( $post );	
												 if($post->post_title=='Спасибо'){	
												 	echo "<li style='display:none;' id='thanks'>".$id."</li>";
												 }
												 else if($post->post_title=='Отзывы'){
											     	 echo "<li><a href='javascript:void(0)' data-target='comments'  onclick=loadPage(".$id.") class='nav-a' id='page".$id."'><span>".$post->post_title."</span><span>".$post->post_title."</span></a></li>";
											     }
											     else if($post->post_title=='Cобытия'){
											     	 echo "<li><a href='javascript:void(0)' data-target='events'  onclick=loadPage(".$id.") class='nav-a' id='page".$id."'><span>".$post->post_title."</span><span>".$post->post_title."</span></a></li>";
											     } 
											     else if($post->post_title=='Забронировать'){
											     	 echo "<li><a href='javascript:void(0)' data-target='calendar'  onclick=loadPage(".$id.") class='nav-a' id='page".$id."'><span>".$post->post_title."</span><span>".$post->post_title."</span></a></li>";
											     } 	
											     else if($post->post_title!='Проживание'){
											     	 echo "<li><a href='javascript:void(0)' onclick=loadPage(".$id.") class='nav-a' id='page".$id."'><span>".$post->post_title."</span><span>".$post->post_title."</span></a></li>";
											     }												    			       
											     else{
											     	echo "<li><a href='javascript:void(0)' data-target='apartment' onclick=loadPage(".$id.") class='nav-a' id='page".$id."'><span>".$post->post_title."</span><span>".$post->post_title."</span></a></li>";
											     }
										
														
									}  
									wp_reset_postdata();	
							 ?>
							
						 </ul> 
					</div>
				</div>
			</nav>
		</header>
