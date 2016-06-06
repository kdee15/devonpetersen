<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Spartan
 * @since Spartan 1.0
 */

get_header(); ?>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <!-- C.2. SITE MAST ------------------------------------------------------------------------------------------- -->

    <section class="page" id="mast">

        <!-- C.2.1. INTRO ----------------------------------------------------------------------------------------- -->

        <?php get_template_part( 'section-front' ); ?>

        <!-- C.2.1. End ------------------------------------------------------------------------------------------- -->
        
        <!-- C.2.2. SLIDER AREA ----------------------------------------------------------------------------------- -->
        
        <div class="wrapper">
        
            <!-- C.2.2.1. ABOUT US -------------------------------------------------------------------------------- -->
            
            <section class="content">
            
                <div class="section__articles">
                    
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish'
                        );
                        $posts = new WP_Query( $args );
                        if( $posts->have_posts() ) {
                          while( $posts->have_posts() ) {
                            $posts->the_post();
                            ?>

                            <article class="article">
                                <a class="article__figure" href="<?php the_permalink() ?>">
                                    <span class="image-wrapper">
                                        <img class="image" src="<?php the_field('image') ?>" alt="<?php the_title(); ?>" />
                                    </span>    
                                </a>
                                <div class="article__body">
                                    <h2><?php the_title(); ?></h2>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>

                            </article>

                            <?php
                          }
                        }
                    ?>
                
                </div>
                
            </section>
            
            <!-- C.2.2.1. END ------------------------------------------------------------------------------------- -->
        
        </div>
        
        <aside class="section-midbar no-tab">
            
            <?php dynamic_sidebar( 'twitter' ); ?>

        </aside>
                
        <aside class="section-sidebar no-mobile">
            
            <?php get_template_part( 'section-sidebar' ); ?>

        </aside>
        
        <!-- C.2.2. End ------------------------------------------------------------------------------------------- -->

    </section>
    
    <!-- C.2. END ------------------------------------------------------------------------------------------------- -->
<?php get_footer(); ?>
<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->