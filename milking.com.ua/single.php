<?php get_header(); ?>
	<div id="top">
		<div class="section boxed-width parallax-sep-8 padding-top-bottom">	
			<div class="container">	

				<div class="sixteen columns-1" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.2s">
					<div class="header-section-text">	
            <a onclick="javascript:history.back();return false;" style="cursor: pointer;"><div class="scroll-left"><span>&#xf177;</span> НАЗАД ДО ПРОДУКЦІЇ</div></a>
				

<div class="sixteen columns" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.2s">
				<div class="header-section-text">	
					<div class="sub-top">ПРОДУКТ ДЛЯ ДІТЕЙ <?php echo get_post_meta($post->ID, "Місяць", $single = true); ?></div>
					<h2><?php the_title(); ?></h2>
                    <div class="prices"><h2><?php echo get_post_meta($post->ID, "Ціна", $single = true); ?> грн.</h2></div>	
					<div class="sub-line"></div>
				</div>	
			</div>	
			<div class="sixteen columns-1" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.2s" style="width: 100%;">	
<div style="width: 100%;margin: 0 auto;" class="text-padding-1">
<img src="<?php $thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
								 	echo $thumb_url[0];?>" class="product-item" alt="">
<?php the_post();the_content(); ?>
</div>	
			</div>

<table class="features-table table table-striped" border="0">
  <thead>
       <tr>
         <td colspan="2"><div align="center" class="style1">СКЛАД, ВАГА, ТЕРМІН ПРИДАТНОСТІ</div></td>
       </tr>
  </thead>
  <tbody>
        <tr>
           <td><div align="left">Склад</div></td>
           <td><div align="left"><?php echo get_post_meta($post->ID, "Склад", $single = true); ?></div></td>
        </tr>
        <tr>
          <td><div align="left">Вага</div></td>
          <td><div align="left"><?php echo get_post_meta($post->ID, "Вага", $single = true); ?></div></td>
        </tr>
        <tr>
          <td><div align="left">Термін придатності</div></td>
          <td><div align="left"><?php echo get_post_meta($post->ID, "Термін придатності", $single = true); ?></div></td>
        </tr>
  </tbody> 
</table>
<table class="features-table table table-striped" border="0">
  <thead>     
        <tr>
           <td colspan="2">
              <div align="center" class="style1">ХАРЧОВА (ПОЖИВНА) ЦІННІСТЬ У 100 Г. ПРОДУКТУ</div>
           </td>
        </tr>    
  </thead> 
        <tr>
          <td><div align="left">Білки</div></td>
          <td><div align="left"><?php echo get_post_meta($post->ID, "Білки", $single = true); ?></div></td>
        </tr>
        <tr>
          <td><div align="left">Жири</div></td>
          <td><div align="left"><?php echo get_post_meta($post->ID, "Жири", $single = true); ?></div></td>
        </tr>
        <tr>
          <td><div align="left">Вуглеводи</div></td>
          <td><div align="left"><?php echo get_post_meta($post->ID, "Вуглеводи", $single = true); ?></div></td>
        </tr>
          <td><div align="left">Калорійність</div></td>
          <td><div align="left"><?php echo get_post_meta($post->ID, "Калорійність", $single = true); ?></div></td>
        </tr>
</table>
					</div> 			
				</div>	   
                
			</div>
                <div style="width: 50px;margin:0 auto;position: relative;height: 50px;">
                    <button class="button_in_basket single_basket" style="background-image: url('<?php bloginfo( 'template_directory' );?>/images/basket.png');" onclick="addToBasket('<?php echo $thumb_url[0];?>','<?php the_title();?>','<?php echo get_post_meta($post->ID, "Ціна", $single = true);?>')"></button>   
                        <button class="button_choose_set single_basket" data-toggle="modal" data-target="#SingleModalChooseSet"></button>
                  </div>
		</div>
	</div>
<?php
get_footer();
