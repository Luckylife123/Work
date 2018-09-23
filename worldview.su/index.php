<?php get_header(); ?>
	<div class="content">
		<div id="myCarousel" style="margin-bottom: 50px;">
			 


  
	 <?php $myquery = new WP_Query( array( 'orderby' => 'rand' ) ); ?>
	<?php while ( $myquery->have_posts() ) {
	$myquery->the_post(); ?>
    		<a href="<?php the_permalink();?>"> 
		    <div class="item" style="position: relative;">
		      <img  src="<?php $thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
									 	echo $thumb_url[0];?>" alt="<?php the_title()?>">			
		        <div class="title-slider"><?php the_title();?></div>		
		             
		    </div>	
		    </a>						
  <?php }?> 
	</div>

  

		<div class="container-fluid">
			<div class="row">				
				<div class="all_posts col-xs-12 col-sm-9">
					<div class="container-fluid">
						<div class="row">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
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
							<?php endwhile;	endif;?>							
						</div>						
					</div>	
					<!-- Composite Start -->
<div id="M394192ScriptRootC657010">
        <div id="M394192PreloadC657010">
        Загрузка...    </div>
        <script>
                (function(){
            var D=new Date(),d=document,b='body',ce='createElement',ac='appendChild',st='style',ds='display',n='none',gi='getElementById';
            var i=d[ce]('iframe');i[st][ds]=n;d[gi]("M394192ScriptRootC657010")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}
            catch(e){var iw=d;var c=d[gi]("M394192ScriptRootC657010");}var dv=iw[ce]('div');dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=657010;c[ac](dv);
            var s=iw[ce]('script');s.async='async';s.defer='defer';s.charset='utf-8';s.src="//jsc.marketgid.com/w/o/worldview.su.657010.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();
    </script>
</div>
<!-- Composite End -->
					<?php   my_paginate_links();?>
				</div>	
				<div  class="sidebar col-xs-12 col-sm-3">
					<?php get_sidebar() ?>
				</div>
			</div>
		</div>	
	</div>
</div>
<?php get_footer(); ?>
