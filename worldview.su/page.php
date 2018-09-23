<?php get_header(); ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-7 col-md-9">	
				<p class="title_current_post"><?php  the_title();?></p>
				<p class="content_current_post"><?php  the_post(); the_content();?></p>
			</div>
			<div class="sidebar col-sm-5 col-md-3">
				<?php get_sidebar() ?>
			</div>
		</div>
	</div>
</div>
</div>
<?php get_footer(); ?>
