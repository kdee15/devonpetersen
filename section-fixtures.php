<!-- C.2.2. SECTION: FIXTURES -->

<section class="section section__fixtures" id="section-fixtures">

    <div class="container">

        <h2>Upcoming Fixtures</h2>

        <ul class="list__fixtures grid">

        <?php

            $fixture1 = current_time('Ymd');

            $args=array(
                'post_type' => 'fixtures',
                'post_status' => 'publish',
                'posts_per_page' => 6,

                'meta_query' => array(
                    array(
                        'key' => 'date',
                        'compare' => '>=',
                        'value' => $fixture1,
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

                    <li class="one-sixth mobi">
                        <span class="fixture card">
                            <p class="fixture-element opponent">vs <?php the_field('opponent') ?></p>
                            <p class="fixture-element venue"><?php the_field('venue') ?></p>
                            <p class="fixture-element date">

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
        
        <a class="btn-default button btn-orange" href="?page_id=16">VIEW MORE FIXTURES</a>

    </div>

</section>