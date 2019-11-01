<footer>

<div class="ft-inner">

	<div class="vc_col-md-3 ft-column-1 ft-column">
		<ul>
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</ul>
	</div>

	<div class="vc_col-md-3 ft-column-2 ft-column">
		<ul>
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
		</ul>
	</div>

	<div class="vc_col-md-6 ft-column-3 ft-column">
		<ul>
		<?php dynamic_sidebar( 'sidebar-5' ); ?>
		</ul>
	</div>

</div>

<div class="copyrights">
	&copy; <?php echo date('Y'); ?> &middot; <a href="#"></a> &middot; All rights reserved &middot; A website by <a href="https://artware.gr" target="_blank">Artware</a>
</div>

</footer>

<script>
new SimpleLightbox({elements: ''});
</script>

<?php wp_footer(); ?>
</body>
</html>
