<div class="single-post-content-navigator">
<?php if ( get_next_post_link() ) { ?>
			<div class="single-previous">
				<div class="single-previous-inside">
					<?php next_post_link( '%link', 'Previous Article', TRUE ); ?>
				</div>
			</div>
		<?php } ?>

		<?php if ( get_previous_post_link() ) { ?>
			<div class="single-next">
				<div class="single-next-inside">
					<?php previous_post_link( '%link', 'Next Article ', TRUE ); ?>
				</div>
			</div>
		<?php } ?>
    </div>