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

    <section class="page page__sponsors" id="mast">

        <!-- C.2.1. INTRO ----------------------------------------------------------------------------------------- -->

        <?php get_template_part( 'section-front' ); ?>

        <!-- C.2.1. End ------------------------------------------------------------------------------------------- -->
        
        <!-- C.2.2. SLIDER AREA ----------------------------------------------------------------------------------- -->
        
        <div class="wrapper">
        
            <!-- C.2.2.1. ABOUT US -------------------------------------------------------------------------------- -->
            
            <section class="content">
            
                <div class="container">
                
                    <h1>i am a fixture page</h1>


                    <?php
                        $args = array(
                            'post_type' => 'sponsors',
                        );
                        $fixtures = new WP_Query( $args );
                        if( $fixtures->have_posts() ) {
                          while( $fixtures->have_posts() ) {
                            $fixtures->the_post();
                            ?>

                            <article>
                                <h3 class="light"><?php the_title() ?></h3>
                                <h3><?php the_field('image') ?></h3>
                                <h3><?php the_field('url') ?></h3>
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