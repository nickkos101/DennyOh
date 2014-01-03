<?php get_header(); ?>
<div class="slider">
	<img src="<?php echo get_template_directory_uri(); ?>/images/slide-three.jpg" class="slide">
	<div class="container">
		<form class="alignCenter" method="post" action="<?php echo get_template_directory_uri().'/dsIDXprocessor.php'; ?>">
			<input type="hidden" name="siteurl" value="<?php echo get_site_url(); ?>">
			<h3>Search for Properties</h3>
			<input name="search" type="text" placeholder="Enter A Location or MLS #">
				<input type="submit" value="Search for Properties">
		</form>
	</div>
</div>
<div class="container">
	<div class="mid-area home-gradient">
		<img style="float:left;" src="<?php echo get_template_directory_uri(); ?>/images/icon-search.png">
		<img style="float:left;width: 380px;height: 222px;" src="<?php echo get_template_directory_uri(); ?>/images/icon-hands.png">
		<img style="float:left;" src="<?php echo get_template_directory_uri(); ?>/images/icon-play.png">
		<div class="col-wrap">
			<div class="column">
				<h3>Listings by Buildings</h3>
			</div>
			<div class="column">
				<h3>Search for listings</h3>
			</div>
			<div class="column">
				<h3>Neighborhood Info</h3>
			</div>
		</div>
		<section class="blog-content">
<h2>Latest Blog Posts:</h2>
<?php 
query_posts( 'posts_per_page=3' );
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h3><?php the_title(); ?></h3>
			<?php the_excerpt(); ?>
				<button><a href="<?php the_permalink(); ?>">Read More</a></button>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
			</section>
			<aside>
<h2>Featured Listings:</h2>
				<ul>
<?php
                $sliderPosts = new WP_Query();
                $sliderPosts->query(array('post_type' => 'neighborhoods', 'showposts' => 5));
                while ($sliderPosts->have_posts()) : $sliderPosts->the_post();
                ?>
					<li>
						<?php the_post_thumbnail(); ?>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					</li>
 <?php endwhile; ?>
				</ul>
			</aside>
		</div>
	</div>
	<?php get_footer(); ?>