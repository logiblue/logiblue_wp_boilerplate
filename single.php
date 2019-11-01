<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>
	<div id="main-content">

		<div class="single-img"><?php the_post_thumbnail('full'); ?></div>
		<div class="single-tit"><?php the_title(); ?></div>
		<div class="single-dat"><?php the_date('j F Y'); ?></div>
		<div class="single-txt"><?php the_content(); ?></div>
		<div class="single-bar"></div>

		<?php if ( get_next_post_link() ) { ?>
			<div class="single-prev">
				<div class="single-prev-inner">
					<?php next_post_link( '%link', 'Προηγούμενο άρθρο', TRUE ); ?>
				</div>
			</div>
		<?php } ?>

		<?php if ( get_previous_post_link() ) { ?>
			<div class="single-next">
				<div class="single-next-inner">
					<?php previous_post_link( '%link', 'Επόμενο άρθρο', TRUE ); ?>
				</div>
			</div>
		<?php } ?>

		<div class="clr"></div>

	</div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
