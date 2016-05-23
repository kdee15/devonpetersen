<?php

/*
Template Name: Archive page
*/

get_header(); ?>


	<!-- C.2. MAST -->
	<div id="mast">
        
        <?php
            $args = array(
                'post_type' => 'fixtures',
            );
            $fixtures = new WP_Query( $args );
            if( $fixtures->have_posts() ) {
              while( $fixtures->have_posts() ) {
                $fixtures->the_post();
                ?>

                <article>
                    <h3 class="light"><?php the_title() ?></h3>
                    <h3><?php the_field('opponent') ?></h3>
                    <p><?php the_field('venue') ?></p>
                </article>

                <?php
              }
            }
        ?>
        
    </div>

	<!-- C.2. END -->

<?php get_footer(); ?>