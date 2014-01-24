<?php get_header(); ?>
<div class="container">
	<div class="content-area">
		<section class="blog-post building">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="nmap">
				<img src="<?php echo get_template_directory_uri(); ?>/images/map.png" style="position:absolute;" />
					<div id="container" style="position:absolute;"></div>
				</div>
				<div class="gmap">
					<?php echo get_post_meta(get_the_ID(), 'googlemap', true); ?>
				</div>
				<div class="building-wrap">
					<h2>
						<?php the_title(); ?>
						<button><img src="<?php echo get_template_directory_uri(); ?>/images/map-button.png"></button>
					</h2>
					<div class="facts-area">
						<h3>FACTS</h3>
						<?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'factsarea', true)); ?>
					</div>
					<div class="carousel">
						<?php imageGallery('neighborhoodimages'); ?>
					</div>
					<div class="building-content">
						<?php the_content(); ?>
					</div>
					<div class="list-and-build-ui">
						<button class="bb-show">
							<span>Buildings</span>
							<img src="<?php echo get_template_directory_uri();?>/images/building-icon.png">
						</button>
						<button class="ll-show">
							<span>Listings</span>
							<img src="<?php echo get_template_directory_uri();?>/images/listing-icon.png">
						</button>
						<div class="buildings">
							<?php
							$featuredPosts = new WP_Query();
							$featuredPosts->query(array('post_type' => 'Buildings', 'posts_per_page' => 5));
							while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
							?>
							<div class="building-list-item">
								<?php the_post_thumbnail(); ?>
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<?php the_excerpt(); ?>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</div>
					<div class="listings">
						<?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'listingshrt', true)); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>