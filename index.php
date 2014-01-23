<?php get_header(); ?>
<?php $themeoptions = get_option('main_theme_options'); ?>
<div class="slider">
	<img src="<?php echo get_template_directory_uri(); ?>/images/slide-three.jpg" class="slide">
	<div class="container">
		<form class="alignCenter" method="post" action="<?php echo get_template_directory_uri().'/dsIDXprocessor.php'; ?>">
			<input type="hidden" name="siteurl" value="<?php echo get_site_url(); ?>">
			<h3><b>Search</b> for Properties</h3>
			<input name="search" type="text" placeholder="Enter A Location or MLS #">
			<input type="submit" value="Search for Properties">
		</form>
	</div>
</div>
<div class="container">
	<div class="mid-area home-gradient">
		<div class="icons">
			<a href="<?php echo $themeoptions['icon1labelnk']; ?>">
				<img onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/search-icon-static.png'"  onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/search-icon-hover.png'"  src="<?php echo get_template_directory_uri(); ?>/images/search-icon-static.png">
			</a>
			<a href="<?php echo $themeoptions['icon2labelnk']; ?>">
				<img onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/handshake-icon-static.png'" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/handshake-icon-hover.png'"  src="<?php echo get_template_directory_uri(); ?>/images/handshake-icon-static.png">
			</a>
			<a href="<?php echo $themeoptions['icon3labelnk']; ?>">
				<img onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/media-icon-static.png'" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/media-icon-hover.png'" src="<?php echo get_template_directory_uri(); ?>/images/media-icon-static.png">
			</a>
		</div>
		<div class="col-wrap">
			<div class="column">
				<h3><a href="<?php echo $themeoptions['icon1labelnk']; ?>"><?php echo $themeoptions['icon1label']; ?></a></h3>
			</div>
			<div class="column">
				<h3><a href="<?php echo $themeoptions['icon2labelnk']; ?>"><?php echo $themeoptions['icon2label']; ?></a></h3>
			</div>
			<div class="column">
				<h3><a href="<?php echo $themeoptions['icon3labelnk']; ?>"><?php echo $themeoptions['icon3label']; ?></a></h3>
			</div>
		</div>
		<img alt="seperator" src="<?php echo get_template_directory_uri(); ?>/images/seperator.png">
		<section class="blog-content">
			<h2><b>Latest</b> Blog Post:</h2>
			<hr>
			<?php 
			query_posts( 'posts_per_page=1' );
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_post_thumbnail('full'); ?>
			<?php the_excerpt(); ?>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</section>
<aside>
	<h2><b>Other</b> Blog Posts:</h2>
	<hr>
	<ul>
		<?php
		$sliderPosts = new WP_Query();
		$sliderPosts->query(array('showposts' => 5));
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