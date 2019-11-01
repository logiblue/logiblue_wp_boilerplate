<?php get_header(); ?>
	<article>
	<div id="main-content">

		<div class="main-content">

			<h2><?php _e('Αποτελέσματα αναζήτησης για: ', 'act_theme'); ?><?php echo get_query_var('s'); ?></h2>

			<ul class="fsf-main">
					<?php
					$s=get_search_query();
					$args = array(
									's' =>$s,
									'post_type' => array('post','page'),
									'posts_per_page' => '99'
								);
					$the_query = new WP_Query( $args );
					if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								
							   $the_query->the_post();
									 ?>
										<li class="fsf">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a><br />
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</li>
									 <?php
							}
						}else{
					?>
							<div class="alert alert-info">
							  <p><?php _e('Λυπούμαστε, δεν βρέθηκε κανένα αποτέλεσμα αναζήτησης. Δοκιμάστε μια διαφορετική λέξη ή <a href="#">επικοινωνήστε</a> μαζί μας για άμεση εξυπηρέτηση.', 'act_theme'); ?></p>
							</div>
					<?php } ?>
			</ul>

		</div>

	</div>
	</article>


<?php get_footer(); ?>