<?php
/**
 * Template Name:Page Onde Estamos
 */

get_header(); ?>

<?php do_action( 'bb_ecommerce_store_page_header' ); ?>

<div id="content-tc" class="container">
    <div class="middle-align">       
        <div class="col-md-12">
            <?php 
            while ( have_posts() ) : the_post(); ?>
                <h1><?php //the_title();?></h1>
                <?php the_content();

                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bb-ecommerce-store' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'bb-ecommerce-store' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
                
                ?>               
            <?php endwhile; // end of the loop. ?>            
        </div>        
        <div class="clear"></div>    
    </div>
</div><!-- container -->

<?php do_action( 'bb_ecommerce_store_page_footer' ); ?>

<?php get_footer(); ?>