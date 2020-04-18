<section class="homepage-blog">

<div class="homepage-blog-left">
    <h2>Some Thoughts</h2>
    <a href="#">Read More</a>
</div>
<div class="homepage-blog-right">
    
<ul>
    <?php
    global $post;
 
    $myposts = get_posts( array(
        'posts_per_page' => 100,
    ) );
 
    if ( $myposts ) {
        foreach ( $myposts as $post ) : 
            setup_postdata( $post ); ?>
            <li class="hpsip">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <span class="entry-date"><?php echo get_the_date(); ?></span>

        </li>
        <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
</ul>

</div>
</section>