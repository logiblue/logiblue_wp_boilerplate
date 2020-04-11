<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article>
	<div id="single-post" class="single-post-content">
		<div class="single-post-content-date"><?php the_date('F j Y'); ?></div>
		<div class="single-post-content-image"><?php the_post_thumbnail('full'); ?></div>

		<div class="single-post-content-title"><?php the_title(); ?></div>
		<div class="single-post-content-cats">
		
			
		<?php
			$categories = get_the_category();
			foreach ( $categories as $category ) { 
				echo '<span class="post-cats">' . esc_attr( $category->name ) . '</span>'; 
			}
		?>
		
	</div>
		<div class="single-post-content-article"><?php the_content(); ?></div>
		<?php get_template_part('components/single-post-nav'); ?>

		<div class="clr"></div>

	</div>
</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
