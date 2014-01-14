<?php
/*
Template Name: Contact Us Page
*/
?>
<?php get_header(); ?>
<?php $themeoptions = get_option('main_theme_options'); ?>
<?php $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>
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
						Address: <?php echo $themeoptions['address']; ?>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-phone2.png">
						Phone: <?php echo $themeoptions['phone']; ?>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-mobile.png">
						Mobile: <?php echo $themeoptions['mobile']; ?>
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/images/icon-mail2.png">
						Email: <?php echo $themeoptions['email']; ?>
					</li>
				</ul>
			</div>
			<?php the_content(); ?>
			<h3 class="moniker">Send us a message</h3>
			<form action="<?php echo get_template_directory_uri(); ?>/emailprocessor.php" method="post">
				<input type="hidden" name="currentpageurl" value="<?php echo $actual_link; ?>">
				<label>Name:</label>
				<input name="name" type="text">
				<label>Email:</label>
				<input name="email" type="text">
				<label>Message:</label>
				<textarea name="message"></textarea>
				<input type="submit">
			</form>
		<?php endwhile; endif; ?>
	</section>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>