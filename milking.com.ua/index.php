<?php get_header(); ?>	
<div id="sets">
<div class="section boxed-width parallax-sep-6 padding-top-bottom" style="padding-bottom: 0px;">
<div class="container">
<div class="sixteen columns" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.2s">
<div class="header-section-text">
<div class="sub-top">ЦІЛОДОБОВИЙ ПРИЙОМ ЗАМОВЛЕНЬ ЧЕРЕЗ САЙТ</div>
<h2>ВИБЕРІТЬ НАБІР ДЛЯ ЗАМОВЛЕННЯ</h2>
<div class="sub-line"></div>
</div>
</div>
<div class="one-third column" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.2s">
<div class="pricing-item popular white-background">
<h6>Дегустаційний набір</h6>
<div class="list_set">
	<ul>
		<li>Включає в себе мінімум 4 одиниці продукції на Ваш вибір.</li>
		<li>Можливість замовлення – одноразово.</li>
		<li>Вартість – 50% від усієї ціни.</li>
		<li>Доставка безкоштовна.</li>
	</ul>
	 При замовленні більше 4 одиниць, їхня вартість оплачується додатково, згідно з вказаною ціною. 
</div>
<div class="price-link-div"><a class="price-link" onclick="addSet('дегустаційний')" data-backdrop="static" data-toggle="modal" data-target="#ModalSet" style="cursor: pointer;">ЗАМОВИТИ</a></div>
</div>
</div>
<div class="one-third column" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.2s">
<div class="pricing-item popular white-background">
<h6>Пробний набір</h6>
<div class="list_set">
	<ul>
		<li>Включає в себе мінімум 4 одиниці продукції на Ваш вибір.</li>
		<li>Можливість замовлення – тричі.</li>
		<li>Вартість – повна.</li>
		<li>Доставка безкоштовна.</li>
	</ul>
	<br><br><br>
</div>
<div class="price-link-div"><a class="price-link" onclick="addSet('пробний')"  data-backdrop="static" data-toggle="modal" data-target="#ModalSet" style="cursor: pointer;">ЗАМОВИТИ</a></div>
</div>
</div>
<div class="one-third column" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.2s">
<div class="pricing-item popular white-background">
<h6> Стандартний набір</h6>
<div class="list_set">
	<ul>
		<li>Можливість замовлення на 7 днів, 14 днів або 30 днів.</li>
		<li>Вартість – повна.</li>
		<li>Перший варіант:
			<ul>
				<li>Від двох одиниць продукції на день.</li>
				<li>Доставка – 10 грн/день.</li>
			</ul>
		</li>
		<li>Другий варіант:
			<ul>
				<li>Від 4 одиниць продукції на день.</li>
				<li> Доставка безкоштовна.</li>
			</ul>
		</li>
	</ul>
</div>  

 
<div class="price-link-div"><a class="price-link" onclick="addSet('стандартний')" data-backdrop="static" data-toggle="modal" data-target="#ModalSet" style="cursor: pointer;">ЗАМОВИТИ</a></div>
</div>
</div>


</div>
</div>
<div id="products">	
		<div class="section boxed-width white-background padding-top padding-bottom">
			<div class="container">	
				<div class="sixteen columns" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.2s">
					<div class="header-section-text">	
						<div class="sub-top">АСОРТИМЕНТ</div>
						<h2>НАТУРАЛЬНЕ І ЖИВЕ ХАРЧУВАННЯ</h2>	
						<div class="sub-line"></div>
					</div>			
				</div>	
				<div class="sixteen columns" data-scroll-reveal="enter bottom move 100px over 0.6s after 0.2s">
					<div id="portfolio-filter">
						<ul id="filter">
							<li><a id="all_products" href="#" class="current" data-filter="*" title="">ВСІ ПРОДУКТИ</a></li>
							<li><a href="#" data-filter=".group1" title="">МОЛОЧНІ ПРОДУКТИ</a></li>
							<li><a href="#" data-filter=".group2" title="">НАСТОЇ З ПЛОДІВ</a></li>
						</ul>
					</div>
				</div>
		</div>
			
				<div class="container">
					<div class="row" id="projects-grid">		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>		
					<?php $category = get_the_category();
					if($category[0]->cat_name=="МОЛОЧНІ ПРОДУКТИ"):
							 $group="group1";
					 else:
						     $group="group2";
					 endif;?>
					<div class="col-sm-1 col-md-4 product portfolio-box-1 <?php echo $group?>">	
						<a href="<?php the_permalink(get_the_ID())?>">                 
                      	<div  class="bg_product">
							<img src='<?php $thumb_id = get_post_thumbnail_id();
									$thumb_url = wp_get_attachment_image_src($thumb_id,"thumbnail-size", true);
								 	echo $thumb_url[0];?>' alt="product" >

							<div class="mask"></div>

							<div class="info_product">
								<span class="product_title"><?php the_title();?></span>
								<hr>
								<?php echo get_post_meta($post->ID, "Місяць", $single = true);?>
								<br>
								<?php echo get_post_meta($post->ID, "Ціна", $single = true);?> ГРН.
							</div>
								 
						</div>
						</a>														
                      	<button class="button_in_basket" style="background-image: url('<?php bloginfo( 'template_directory' );?>/images/basket.png');" onclick="addToBasket('<?php echo $thumb_url[0];?>','<?php the_title();?>','<?php echo get_post_meta($post->ID, "Ціна", $single = true);?>')"></button>		
                      	<button class="button_choose_set" data-toggle="modal" data-target="#ModalChooseSet"></button>			
					</div>							
			<?php endwhile;	endif;?>	
					</div>							
				</div>		  
		</div>
	</div>
</div>

 <?php get_footer()?>