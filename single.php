<?php get_header(); ?>
<div class="container">
	<div class="content-area">
		<section class="blog-post">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="meta-info">
				Posted on <?php the_date(); ?> | by <?php the_author(); ?>
			</div>
			<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('full', array('class' => " featured-image"));
			}  
			?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</section>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>