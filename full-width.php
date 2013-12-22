<?php
/*
Template Name: Full Width Page
*/
?>
<?php get_header(); ?>
<div class="container">
	<div class="mid-area">
		<section class="fullwidth-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</section>
</div>
</div>
<?php get_footer(); ?>