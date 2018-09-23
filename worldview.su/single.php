<?php get_header(); ?>
	<div class="content" style="margin-top: 50px;">
		<div class="container-fluid">
			<div class="row">
					<div class="current_post col-sm-7 col-md-9 col-lg-9">
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
						<?php  the_post(); the_content();?>
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
    				<div id="vk_comments"></div> 
                        <script type="text/javascript"> 
                        VK.Widgets.Comments("vk_comments", {limit: 5, attach: "*"}); 
                        </script>	
                    </div>
					<div class="sidebar col-sm-5 col-md-3 col-lg-3" id="scrollable">
									<?php get_sidebar() ?>
					</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
