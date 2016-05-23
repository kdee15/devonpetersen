<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


    <!-- C.2. MAST -->

        <!-- C.2.3 Page Content -->


<h1>BLOOOOGOOOGOOGOGGO SINGLE</h1>



                        <!-- C.2.4.1.1. Dynanic Content area -->

                        <?php while ( have_posts() ) : the_post(); ?>

                        <h3><?php the_title(); ?></h3>	

                        <?php the_content(); ?>

                        <!-- .nav-single -->

                        <?php endwhile; // end of the loop. ?>

                        <!-- C.1.1 End -->

                        <!-- C.1.2 Back link -->

                        <!-- C.1.2 End -->





        <!-- C.2.3 End -->


    <!-- C.2. END -->

<?php get_footer(); ?>