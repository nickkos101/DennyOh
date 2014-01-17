<?php get_header(); ?>
<div class="container">
	<div class="content-area">
		<section class="blog-post">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</section>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>