<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>
	<div id="main-content">
			<?php the_post_thumbnail('full'); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
	</div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>