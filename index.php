<?php get_header(); ?>
<div class="slider">
	<img src="<?php echo get_template_directory_uri(); ?>/images/slide-three.jpg" class="slide">
	<div class="container">
		<form class="alignCenter">
			<h3>Search for Properties</h3>
			<input type="text" placeholder="Enter A Location or MLS #">
				<input type="submit" value="Search for Properties">
		</form>
	</div>
</div>
<div class="container">
	<div class="mid-area home-gradient">
		<div class="col-wrap">
			<div class="column">
				<img src="<?php echo get_template_directory_uri(); ?>/images/property_lease.png">
				<h3>Listings by Buildings</h3>
			</div>
			<div class="column">
				<img src="<?php echo get_template_directory_uri(); ?>/images/property_rent.png">
				<h3>Search for listings</h3>
			</div>
			<div class="column">
				<img src="<?php echo get_template_directory_uri(); ?>/images/property_sale.png">
				<h3>Neighborhood Info</h3>
			</div>
		</div>
		<section class="blog-content">
			<h2>This is a headline content.</h2>
			<iframe width="560" height="315" src="//www.youtube.com/embed/P8ymgFyzbDo" frameborder="0" allowfullscreen></iframe>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</section>
			<aside>
				<ul>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/property.jpg">
						<h4>This is a featured listing.</h4>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/property.jpg">
						<h4>This is a featured listing.</h4>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/property.jpg">
						<h4>This is a featured listing.</h4>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/property.jpg">
						<h4>This is a featured listing.</h4>
					</li>
				</ul>
			</aside>
		</div>
	</div>
	<?php get_footer(); ?>