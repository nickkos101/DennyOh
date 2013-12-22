<?php get_header(); ?>
<div class="container">
	<div class="content-area">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="blog-post neighborhood">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<hr/>
			<div class="neighborhood-columns">
				<img class="map-icon" src="<?php echo get_template_directory_uri(); ?>/images/map-icon.png">
				<div class="neighborhood-content">
					<?php the_excerpt(); ?>
					<button><a href="<?php the_permalink(); ?>">Learn More</a></button>
				</div>
				<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail(array('class' => " featured-image"));
				}  
				?>
			</div>
			<hr class="dots" />
		</section>
	<?php endwhile; endif; ?>
</div>
<?php include 'sidebar.php' ?>
</div>
<?php get_footer(); ?>