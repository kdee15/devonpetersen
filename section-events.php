<!-- C.2.1. SECTION: EVENTS -->

<section class="section section__events" id="section-events">

    <div class="container">

        <h2>Upcoming Events</h2>

        <ul class="list__schedule grid">

        <?php

            $event1 = current_time('Ymd');

            $args=array(
                'post_type' => 'events',
                'post_status' => 'publish',
                'posts_per_page' => 4,

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
        
        <a class="btn-default button btn-orange" href="?page_id=144">VIEW MORE EVENTS</a>

    </div>

</section>

<!-- C.2.7. END -->