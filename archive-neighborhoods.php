<?php get_header(); ?>
<div class="container">
	<div class="content-area">
		<section class="blog-post neighborhood">
			<div class="nmap">
				<img src="<?php echo get_template_directory_uri(); ?>/images/map.png" style="position:absolute;" />
				<div id="container" style="position:absolute;"></div>
			</div>
			<div class="gmap">
				<?php echo get_post_meta(get_the_ID(), 'googlemap', true); ?>
			</div>
		</section>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section class="blog-post neighborhood">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<hr/>
				<div class="neighborhood-columns">
					<?php autoc_get_img('neighborhoodicon', true); ?>
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