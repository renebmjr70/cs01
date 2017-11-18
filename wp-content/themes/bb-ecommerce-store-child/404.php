<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Ecommerce Store
 */

get_header(); ?>

<div id="content-tc">
    <div class="container">
        <div class="page-content">      
            <div class="col-md-12">
        		<h1><?php the_title();?></h1>   
                <h3><?php esc_html_e( '404 - Não Encontramos a Página !', 'bb-ecommerce-store' ); ?></h3>
                <p class="text-404"><?php esc_html_e( 'Opa algo deu errado', 'bb-ecommerce-store' ); ?></p>
                <p class="text-404"><?php esc_html_e( 'Mas não se preocupe, estamos fazendo o melhor.', 'bb-ecommerce-store' ); ?></p>
                <div class="read-moresec">
                    <div><a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Voltar para a Home', 'bb-ecommerce-store' ); ?></a></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php get_footer(); ?>