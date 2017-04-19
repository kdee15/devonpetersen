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
            
                <div class="container">
                
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'page' ); ?>
                        <?php comments_template( '', true ); ?>
                    <?php endwhile; // end of the loop. ?>
                
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