<?php get_header(); ?>



<div class="blog sitewise">
<h2>Blog</h2>
<p>Writing thought's and findings primary as notes for my self and guides for others.  </p>

<?php if (have_posts()):while(have_posts()): the_post(); the_content(); endwhile; endif; ?>


</div>

<?php get_footer(); ?>