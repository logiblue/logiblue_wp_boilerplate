<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>
	<div id="main-content">
		<div class="vc_col-sm-7">
			<?php the_post_thumbnail('full'); ?>
		</div>

		<div class="vc_col-sm-5">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>