<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>
	<div id="main-content">
		<?php the_content(); ?>
	</div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>