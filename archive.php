<?php get_header(); ?>
<div class="container">
	<div class="content-area">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="blog-post">
			<h2><?php the_title(); ?></h2>
			<div class="meta-info">
				Posted on <?php the_date(); ?> | by <?php the_author(); ?>
			</div>
			<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail('full', array('class' => " featured-image"));
			}  
			?>
			<?php the_content(); ?>
			<a href="<?php the_permalink(); ?>"><button>Read More</button></a>

		</section>
	<?php endwhile; endif; ?>
</div>
<?php include 'sidebar.php' ?>
</div>
<?php get_footer(); ?>