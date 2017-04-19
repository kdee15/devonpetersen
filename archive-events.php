<?php get_template_part( 'inc/page-header' ); ?>

<!-- C. WORK AREA +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <!-- C.2. SITE MAST ------------------------------------------------------------------------------------------- -->

    <section class="page archive" id="mast">

        <!-- C.2.1. INTRO ----------------------------------------------------------------------------------------- -->

        <?php get_template_part( 'section-front' ); ?>

        <!-- C.2.1. End ------------------------------------------------------------------------------------------- -->
        
        <!-- C.2.2. SLIDER AREA ----------------------------------------------------------------------------------- -->
        
        <div class="wrapper">
        
            <!-- C.2.2.1. ABOUT US -------------------------------------------------------------------------------- -->
            
            <section class="content">
            
                <div class="container">
                    
                    <h1>Upcoming Events</h1>

                    <ul class="list__schedule grid">

                    <?php

                        $event1 = current_time('Ymd');

                        $args=array(
                            'post_type' => 'events',
                            'post_status' => 'publish',

                            'meta_query' => array(
                                array(
                                    'key' => 'date',
                                    'compare' => '>=',
                                    'value' => $event1,
                                )
                            ),

                            'meta_key'	=> 'date',
                            'orderby'	    => 'meta_value_num',
                            'order'		=> 'ASC'
                        );
                        $my_query = null;
                        $my_query = new WP_Query($args);

                        if( $my_query->have_posts() ) {
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                <li class="one-quarter mobi">
                                <span class="schedule card">
                                    <p class="schedule-element title"><?php the_title() ?></p>
                                    <?php the_excerpt() ?>
                                    <p class="schedule-element venue"><?php the_field('venue') ?></p>
                                    <p class="schedule-element date">

                                        <?php 

                                            // get raw date
                                            $date = get_field('date', false, false);

                                            // make date object
                                            $date = new DateTime($date);

                                        ?>

                                        <?php echo $date->format('d M'); ?>

                                    </p>
                                </span>
                                </li>

                            <?php

                            endwhile;
                        }
                        wp_reset_query();  // Restore global post data stomped by the_post().
                    ?> 

                    </ul>
                  
                </div>
                
            </section>
           
            <!-- C.2.2.1. END ------------------------------------------------------------------------------------- -->
        
            <!-- C.2.2.1. CONTACT --------------------------------------------------------------------------------- -->
            
            <?php get_template_part( 'section-contact' ); ?>
            
            <!-- C.2.2.1. END ------------------------------------------------------------------------------------- -->
          
            <!-- C.2.2.1. FOOTER ---------------------------------------------------------------------------------- -->
            
            <?php get_footer(); ?>
            
            <!-- C.2.2.1. END ------------------------------------------------------------------------------------- -->
            
        </div>
        
        <!-- C.2.2. End ------------------------------------------------------------------------------------------- -->

    </section>
    
    <!-- C.2. END ------------------------------------------------------------------------------------------------- -->

<!-- C. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D. JAVASCRIPT ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- D.1. FOOTER JS -->

<?php get_template_part( 'inc/footer-scripts' ); ?>

<!-- D. END +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->