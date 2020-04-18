<?php get_header(); ?>
<section class="homepage-portfolio">

<div class="homepage-portfolio-top">
    <h2>Selected Projects</h2>
</div>
<div class="homepage-portfolio-bottom">
    
<ul class="portitems">
    <?php
    global $post;
 
    $myposts = get_posts( array(
        'post_type'=> 'portfolio',
        'posts_per_page' => 4
    ) );
 
    if ( $myposts ) {
        foreach ( $myposts as $post ) : 
            setup_postdata( $post ); ?>
            <li class="hpport">
                <a class='hpport-tit' style="background-image: url(' <?php the_field('project_photo'); ?>')" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <p class="hpport-cli"><?php the_field( 'Client' ); ?> | <?php the_field( 'year' ); ?></p>
                <p class="hpport-desc"><?php the_field( 'description' ); ?></p>
        </li>
        <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
</ul>
</div>
</section>
<?php get_footer(); ?>