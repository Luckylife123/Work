<?php
get_header();
?>
<div class="postsUrl"  style="display: none" id='gallery'>
<?php 

$args = array(
	'numberposts' => 5,
	'category'    => 0,
	'category_name' => 'Жилье',
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	 $posts = get_posts($args );	
	   foreach( $posts as $post ){
	   		echo '<a href="javascript:void(0)" class="gallery-item" id="post'.$post->ID.'" onclick="loadAppartaments('.$post->ID.')"><span class="title-gallery-item">'.get_post_meta($post->ID, "Цена", $single = true).'</span>'.get_the_post_thumbnail().'</a>';	
	   }
	 	
 ?>
 </div>



<div class="postsUrl"  style="display: none" id='events'>
<?php 

$args = array(
	'numberposts' => 5,
	'category'    => 0,
	'category_name' => 'Cобытия',
	'orderby'     => 'date',
	'order'       => 'DESC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
);
	 $posts = get_posts($args );	
	   foreach( $posts as $post ){
	   		echo '<a href="javascript:void(0)" class="gallery-item" id="post'.$post->ID.'" onclick="loadEvents('.$post->ID.')"><span class="title-gallery-item">'.$post->post_title.'</span>'.get_the_post_thumbnail().'</a>';	
	   }
	 	
 ?>
 </div>

<div class="postsText"  style="display: none;">
<?php 
	  $posts = get_posts( );
	   foreach( $posts as $post ){
	 	echo '<div id=titlePost'.$post->ID.'>'.$post->post_title.'</div>';
	 	echo '<div id=contentPost'.$post->ID.'>'.$post->post_content.'</div>';
	 	echo '<div id=aboutPost'.$post->ID.'><div class="price">'.get_post_meta($post->ID, "Цена", $single = true).'</div>'.get_post_meta($post->ID, "Опис номера", $single = true).'</div>';
		}
 ?>
 </div>
 <div class="pages" style="display: none;">
 	  <?php  
									$pages = get_pages( );
									foreach( $pages as $post ){
										setup_postdata( $post );														
											     echo "<div id='pageContent".$post->ID."'><div class='title'><h3>".$post->post_title."</h3></div><div>".$post->post_content."</div>";	
												 	echo '</div>';	

									}  
									wp_reset_postdata();	
							 ?>
 </div>
 
 <div id="block-commnets" style="display: none;">
 	<?php 
	 $withcomments = "1";
	  comments_template();
 	 ?>
 	
 </div>

<div class="title_site">Комфортный эко - отель в Криму. 50 метров от самового чистого моря</div>


<div class="content">


<?php 
get_footer();
?>

