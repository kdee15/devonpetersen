<!-- C.2.3. SIDEBAR CONTENT: RESULTS -->

<h2>Results</h2>

<ul class="list__fixtures">

<?php

    $args=array(
      'post_type' => 'fixtures',
      'post_status' => 'publish',
      'meta_key'	=> 'result',
      'meta_value'	=> 'yes'
    );
    $my_query = null;
    $my_query = new WP_Query($args);

    if( $my_query->have_posts() ) {
        while ($my_query->have_posts()) : $my_query->the_post(); ?>

            <li class="fixture card">
                <p class="fixture-element opponent">
                    <?php the_field('player') ?>: <?php the_field('player_score') ?>
                </p>
                <p class="fixture-element venue">
                    <?php the_field('opponent') ?>: <?php the_field('opponent_score') ?>
                </p>
                <p class="fixture-element date">

                    <?php 

                        // get raw date
                        $date = get_field('date', false, false);

                        // make date object
                        $date = new DateTime($date);

                    ?>

                    <?php echo $date->format('d M'); ?>

                </p>
            </li>

        <?php

        endwhile;
    }
    wp_reset_query();  // Restore global post data stomped by the_post().
?> 

</ul>