<?php
/*
Template Name: Contact Us Page
*/
?>
<?php get_header(); ?>
<div class="container">
	<div class="content-area">
		<section class="fullwidth-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=San+Diego,+CA&amp;aq=0&amp;oq=san+&amp;sll=32.824552,-117.108978&amp;sspn=1.080161,2.113495&amp;ie=UTF8&amp;hq=&amp;hnear=San+Diego,+San+Diego+County,+California&amp;ll=32.824211,-117.108765&amp;spn=1.081479,2.113495&amp;t=m&amp;z=10&amp;output=embed"></iframe>
			<h2><?php the_title(); ?></h2>
			<div class="contact-details">
				<ul>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-location.png">
						3015 Grand Ave, Coconut Grove,
						Merrick Way, FL 12345
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-phone2.png">
						Phone: 619-729-8424
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-mobile.png">
						Mobile: 619-729-8424
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-mail2.png">
						Email: info@yourwebsite.com
					</li>
				</ul>
			</div>
			<?php the_content(); ?>
			<h3 class="moniker">Send us a message</h3>
			<form>
				<label>Name:</label>
				<input type="text">
				<label>Message:</label>
				<textarea></textarea>
				<label>Department:</label>
				<select>
					<option>Sales</option>
					<option>HR</option>
					<option>Marketing</option>
					<option>Technical Support</option>
				</select>
				<label>Options 1:</label>
				<input type="radio">
				<label>Options 2:</label>
				<input type="radio">
				<label>Options 3:</label>
				<input type="radio">
				<input type="submit">
			</form>
		<?php endwhile; endif; ?>
	</section>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>