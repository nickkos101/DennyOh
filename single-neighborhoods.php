<?php get_header(); ?>
<div class="container">
	<div class="content-area">
		<section class="blog-post building">
			<canvas id="myChart" width="828" height="680" style="position:absolute;"></canvas>
				<img src="<?php echo get_template_directory_uri(); ?>/images/map.png" style="" />
							<div class="building-wrap">
				<h2>
					<?php the_title(); ?>
					<button><img src="<?php echo get_template_directory_uri(); ?>/images/map-button.png"></button>
				</h2>
				<hr/>
				<div class="carousel">
					<img class="main-img" src="<?php echo get_template_directory_uri(); ?>/images/property.jpg">
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/property.jpg"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/property.jpg"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/property.jpg"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/property.jpg"></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/property.jpg"></li>
					</ul>
				</div>
				<div class="building-content">
					<?php the_title(); ?>
				</div>
			</div>
		</section>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>